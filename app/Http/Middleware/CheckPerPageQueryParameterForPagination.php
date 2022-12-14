<?php

namespace App\Http\Middleware;

use App\Exceptions\InvalidPerPageValueException;
use App\Exceptions\InvalidResolverValueException;
use App\Resolvers\PerPage\PerPageResolverInterface;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CheckPerPageQueryParameterForPagination
{
    /**
     * @var PerPageResolverInterface
     */
    protected $perPageResolver;

    /**
     * CheckPerPageQueryParameterForPagination constructor.
     *
     * @param PerPageResolverInterface $perPageResolver
     */
    public function __construct(PerPageResolverInterface $perPageResolver)
    {
        $this->perPageResolver = $perPageResolver;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $options = config('pagination');

        $paramName = $options['param_name'];

        $allowed = $options['allowed'];

        if ($request->filled($paramName)) {
            try {

                $request->merge([
                    $paramName => $this->perPageResolver->resolve($request->input($paramName))
                ]);

            } catch (InvalidResolverValueException $exception) {
                throw new InvalidPerPageValueException(
                    ResponseAlias::HTTP_UNPROCESSABLE_ENTITY,
                    __('Geçersiz sayfa başı kayıt sayısı değeri verildi. Sadece :allowed olabilir.', [
                        'allowed' => implode(', ', $allowed)
                    ])
                );
            }
        }

        return $next($request);
    }
}

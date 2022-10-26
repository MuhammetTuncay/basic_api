<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
## Proje Hakkında
Proje geliştirilirken DeferrableProvider kullanılmıştır
Projenin BE tarafında hızlı olması açısında FE tarafından gelen amount değerlerinin 100 ile çarpılıp gönderildiği varsayılmıştır.

### Proje Teknik Stack
**Dil:** PHP<br>
**Framework:** Laravel<br>
**Veritanı:** MySql<br>
**Docker**<br>

###Öne Çıkan Design Patternler

Proje içerisinde birden fazla pattern kullanılsada öne çıkanlar bu alanda yer almaktadır.

**Chain Pattern:** Bu patterni verilen siparişlere indirim uygularken kullanmaktayım.

### Paketler
- [Ide Helper](https://github.com/barryvdh/laravel-ide-helper)
- [Sail](https://laravel.com/docs/8.x/sail)
- [Spatie Query Builder](https://spatie.be/docs/laravel-query-builder/v3/introduction)

## Teknik Borçlar

Proje geliştirilirken teknik yeterlilik konusunun anlaşılması için geliştirilmiş olup, olması gereken her konu geliştirilmemiştir. Bunlardan bazıla ise;

- Api dökümantasyonu oluşturulmalıdır.
- Proje dökümantasyonu daha kapsamlı olmalıdır.
- Testler yazılmalıdır.
- Transaction(istenmeyen durumlarda dB den verileri silme.) kullanılmalıdır.
- ID ler ardışık olmamalı, UUID kullanılabilir.
- Cart yapısı oluşturulmalı ve daha kapsamlı olmalıdır. Mevcut sistem günü kurtarması için geliştirilmiştir.
- Stok takibi yapılmalıdır.

## API

###Collections

Proje collectionlarına ana dizin altında test_case.postman_collection.json olarak ulaşılabilmektedir.

Category:
```json
{
    "data": [
        {
            "id": 1,
            "name": "Teknoloji"
        }
    ],
    "links": {
        "first": "http://localhost/api/categories?page=1",
        "last": "http://localhost/api/categories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/api/categories?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/api/categories",
        "per_page": 25,
        "to": 1,
        "total": 1
    }
}
```

Customer:
```json
{
    "data": [
        {
            "id": 1,
            "name": "Muhammet",
            "since": "2020-01-01T00:00:00.000000Z",
            "revenue": 10000
        }
    ],
    "links": {
        "first": "http://localhost/api/customers?page=1",
        "last": "http://localhost/api/customers?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/api/customers?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/api/customers",
        "per_page": 25,
        "to": 1,
        "total": 1
    }
}
```

Product:
```json
{
    "data": [
        {
            "id": 1,
            "name": "Symfony",
            "category_id": {
                "id": 2,
                "name": "Teknoloji"
            },
            "price": 100,
            "stock": 100
        }
    ],
    "links": {
        "first": "http://localhost/api/products?page=1",
        "last": "http://localhost/api/products?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/api/products?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/api/products",
        "per_page": 25,
        "to": 1,
        "total": 1
    }
}
```

Order:
```json
{
    "data": [
        {
            "id": 1,
            "customer": {
                "id": 1,
                "name": null
            },
            "items": [
                {
                    "id": 1,
                    "customer": 1,
                    "total": 900
                }
            ],
            "total": 900
        }
    ],
    "links": {
        "first": "http://localhost/api/orders?page=1",
        "last": "http://localhost/api/orders?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost/api/orders?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost/api/orders",
        "per_page": 25,
        "to": 1,
        "total": 1
    }
}
```

Discount:
```json
{
    "data": {
        "id": 1,
        "discounts": [
            {
                "discount_reason": "BUY_5_GET_1",
                "discount_amount": 100
            }
        ],
        "total": 900
    }
}
```
##

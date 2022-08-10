---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://oks.uz/docs/collection.json)

<!-- END_INFO -->

#Banner


<!-- START_bf8d787c09dd822a14140019dccb1a01 -->
## Banner Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/banners`


<!-- END_bf8d787c09dd822a14140019dccb1a01 -->

<!-- START_4898d09e9b350d22510d9216338fec39 -->
## Banner create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ipsam","title":"voluptas","description":"quas","link":"architecto","type":13,"sort":4,"file_id":3,"lang":14,"lang_hash":"quia","status":11,"created_at":"distinctio","updated_at":"similique"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ipsam",
    "title": "voluptas",
    "description": "quas",
    "link": "architecto",
    "type": 13,
    "sort": 4,
    "file_id": 3,
    "lang": 14,
    "lang_hash": "quia",
    "status": 11,
    "created_at": "distinctio",
    "updated_at": "similique"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/banners`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `link` | string |  optional  | no-required link
        `type` | integer |  optional  | no-required type
        `sort` | integer |  optional  | no-required sort
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_4898d09e9b350d22510d9216338fec39 -->

<!-- START_f999ebc2783a8ac383571df8812c7dbc -->
## Banner update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/banners/1?id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"dolor","title":"ea","description":"itaque","link":"maiores","type":17,"sort":15,"file_id":2,"lang":1,"lang_hash":"est","status":6,"created_at":"rerum","updated_at":"quod"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "ea",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "dolor",
    "title": "ea",
    "description": "itaque",
    "link": "maiores",
    "type": 17,
    "sort": 15,
    "file_id": 2,
    "lang": 1,
    "lang_hash": "est",
    "status": 6,
    "created_at": "rerum",
    "updated_at": "quod"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `link` | string |  optional  | no-required link
        `type` | integer |  optional  | no-required type
        `sort` | integer |  optional  | no-required sort
        `file_id` | integer |  optional  | no-required file_id
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f999ebc2783a8ac383571df8812c7dbc -->

<!-- START_e4c4a612684861d9b7cab6336bafa46a -->
## Banner view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/banners/1?id=placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "placeat",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_e4c4a612684861d9b7cab6336bafa46a -->

<!-- START_c5066517cfc7e5df25f30e182d70b5fa -->
## Banner delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/banners/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/banners/1"
);

let params = {
    "id": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c5066517cfc7e5df25f30e182d70b5fa -->

<!-- START_ed5da9594c924002ba1dc771427a4614 -->
## Banner Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/banners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/banners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/banners`


<!-- END_ed5da9594c924002ba1dc771427a4614 -->

<!-- START_4d938392e5baf8bbde3854b9642c3db0 -->
## Banner view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/banners/1?id=repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/banners/1"
);

let params = {
    "id": "repellat",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "link": "string",
    "type": "integer",
    "sort": "integer",
    "file_id": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/banners/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_4d938392e5baf8bbde3854b9642c3db0 -->

#Block


<!-- START_d78df50d648a79ea9c92951e18bf2cf3 -->
## Block Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "text",
    "file_id": "integer",
    "number": "integer",
    "link": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/blocks`


<!-- END_d78df50d648a79ea9c92951e18bf2cf3 -->

<!-- START_ada493bef621f07ed5999dcbe786fb9f -->
## Block create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"voluptatem","description":"est","file_id":8,"number":5,"link":19,"lang":4,"lang_hash":"molestias","type":7,"created_at":"sit","updated_at":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "voluptatem",
    "description": "est",
    "file_id": 8,
    "number": 5,
    "link": 19,
    "lang": 4,
    "lang_hash": "molestias",
    "type": 7,
    "created_at": "sit",
    "updated_at": "reprehenderit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/blocks`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | text |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `number` | integer |  optional  | no-required number
        `link` | integer |  optional  | no-required link
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_ada493bef621f07ed5999dcbe786fb9f -->

<!-- START_69e628e10ad2edb0eb6ed9d60df53d1a -->
## Block update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/blocks/1?id=earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"corrupti","title":"molestiae","description":"optio","file_id":15,"number":7,"link":19,"lang":8,"lang_hash":"voluptas","type":8,"created_at":"vel","updated_at":"modi"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/blocks/1"
);

let params = {
    "id": "earum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "corrupti",
    "title": "molestiae",
    "description": "optio",
    "file_id": 15,
    "number": 7,
    "link": 19,
    "lang": 8,
    "lang_hash": "voluptas",
    "type": 8,
    "created_at": "vel",
    "updated_at": "modi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/blocks/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | text |  optional  | no-required description
        `file_id` | integer |  optional  | no-required file_id
        `number` | integer |  optional  | no-required number
        `link` | integer |  optional  | no-required link
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_69e628e10ad2edb0eb6ed9d60df53d1a -->

<!-- START_7074ec8a30afd8c51a4f8421c16147d9 -->
## Block view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/blocks/1?id=iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/blocks/1"
);

let params = {
    "id": "iusto",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "text",
    "file_id": "integer",
    "number": "integer",
    "link": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/blocks/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_7074ec8a30afd8c51a4f8421c16147d9 -->

<!-- START_b7aa46ca08280c7e0d0f6686e7892522 -->
## Block delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/blocks/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/blocks/1"
);

let params = {
    "id": "quidem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/blocks/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_b7aa46ca08280c7e0d0f6686e7892522 -->

<!-- START_2680abe125af088f7dcfa632014005e5 -->
## Block Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "text",
    "file_id": "integer",
    "number": "integer",
    "link": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/blocks`


<!-- END_2680abe125af088f7dcfa632014005e5 -->

<!-- START_8897056bea28640ba8aecef56e080520 -->
## Block view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/blocks/1?id=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/blocks/1"
);

let params = {
    "id": "distinctio",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "text",
    "file_id": "integer",
    "number": "integer",
    "link": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/blocks/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_8897056bea28640ba8aecef56e080520 -->

#Category


<!-- START_fe5531af46ff26bddde964cac96f6dcf -->
## Category Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "status": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "sort": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/categories`


<!-- END_fe5531af46ff26bddde964cac96f6dcf -->

<!-- START_30535ceeeaeaf82d7c418c31191ebe64 -->
## Category create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quia","name":"vel","type":11,"status":8,"lang":4,"lang_hash":"earum","sort":5,"created_at":"itaque","updated_at":"possimus"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quia",
    "name": "vel",
    "type": 11,
    "status": 8,
    "lang": 4,
    "lang_hash": "earum",
    "sort": 5,
    "created_at": "itaque",
    "updated_at": "possimus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/categories`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `type` | integer |  optional  | no-required type
        `status` | integer |  optional  | no-required status
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_30535ceeeaeaf82d7c418c31191ebe64 -->

<!-- START_37eab64454c255ea07b6b2b4da0e21a3 -->
## Category update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/categories/1?id=mollitia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"doloremque","name":"id","type":4,"status":17,"lang":13,"lang_hash":"asperiores","sort":11,"created_at":"doloremque","updated_at":"rerum"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/categories/1"
);

let params = {
    "id": "mollitia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "doloremque",
    "name": "id",
    "type": 4,
    "status": 17,
    "lang": 13,
    "lang_hash": "asperiores",
    "sort": 11,
    "created_at": "doloremque",
    "updated_at": "rerum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `type` | integer |  optional  | no-required type
        `status` | integer |  optional  | no-required status
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37eab64454c255ea07b6b2b4da0e21a3 -->

<!-- START_742ce8859defc2ea3e424ee4ac88bc5b -->
## Category view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/categories/1?id=minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/categories/1"
);

let params = {
    "id": "minima",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "status": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "sort": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_742ce8859defc2ea3e424ee4ac88bc5b -->

<!-- START_f80729c1801be0add679365e1782fc3d -->
## Category delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/categories/1?id=officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/categories/1"
);

let params = {
    "id": "officia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f80729c1801be0add679365e1782fc3d -->

<!-- START_80420c095ed96da032c9eb419d7d6e2d -->
## Category Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "status": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "sort": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/categories`


<!-- END_80420c095ed96da032c9eb419d7d6e2d -->

<!-- START_1402ab8abac97e9e61e52a840a1d6700 -->
## Category view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/categories/1?id=dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/categories/1"
);

let params = {
    "id": "dignissimos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "status": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "sort": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_1402ab8abac97e9e61e52a840a1d6700 -->

#District


<!-- START_9d33060348d5d02c01789f558160dd6b -->
## District Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/districts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/districts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "bigint",
    "parent_code": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "region"
    ]
}
```

### HTTP Request
`GET api/v1/admin/districts`


<!-- END_9d33060348d5d02c01789f558160dd6b -->

<!-- START_2d250bec4e961636657e67845d7b0424 -->
## District create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/districts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"dolores","name_uz":"repellendus","name_ru":"sint","name_en":"aliquid","code":"corrupti","region_id":"et","parent_code":13,"status":13,"deleted_at":"sit","created_at":"illum","updated_at":"eos"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/districts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "dolores",
    "name_uz": "repellendus",
    "name_ru": "sint",
    "name_en": "aliquid",
    "code": "corrupti",
    "region_id": "et",
    "parent_code": 13,
    "status": 13,
    "deleted_at": "sit",
    "created_at": "illum",
    "updated_at": "eos"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/districts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `region_id` | bigint |  optional  | no-required region_id
        `parent_code` | integer |  optional  | no-required parent_code
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_2d250bec4e961636657e67845d7b0424 -->

<!-- START_d52b21a150603d5703e9388ecb7e692f -->
## District update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/districts/1?id=expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quo","name_uz":"incidunt","name_ru":"sint","name_en":"ipsum","code":"quo","region_id":"doloremque","parent_code":16,"status":17,"deleted_at":"numquam","created_at":"ducimus","updated_at":"tempore"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/districts/1"
);

let params = {
    "id": "expedita",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quo",
    "name_uz": "incidunt",
    "name_ru": "sint",
    "name_en": "ipsum",
    "code": "quo",
    "region_id": "doloremque",
    "parent_code": 16,
    "status": 17,
    "deleted_at": "numquam",
    "created_at": "ducimus",
    "updated_at": "tempore"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/districts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `region_id` | bigint |  optional  | no-required region_id
        `parent_code` | integer |  optional  | no-required parent_code
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_d52b21a150603d5703e9388ecb7e692f -->

<!-- START_e33dbb689b602c84607377a66ef933b1 -->
## District view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/districts/1?id=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/districts/1"
);

let params = {
    "id": "voluptatem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "bigint",
    "parent_code": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/districts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_e33dbb689b602c84607377a66ef933b1 -->

<!-- START_0e7382d4d568de6e05cbe90f2de89b95 -->
## District delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/districts/1?id=provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/districts/1"
);

let params = {
    "id": "provident",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/districts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_0e7382d4d568de6e05cbe90f2de89b95 -->

<!-- START_4f77ecb9c1083e891712e83ee47434e5 -->
## District Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/districts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/districts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "bigint",
    "parent_code": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "region"
    ]
}
```

### HTTP Request
`GET api/v1/districts`


<!-- END_4f77ecb9c1083e891712e83ee47434e5 -->

<!-- START_376bdcd69ca330c390a6b0dfbd455d58 -->
## District view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/districts/1?id=non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/districts/1"
);

let params = {
    "id": "non",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "bigint",
    "parent_code": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/districts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_376bdcd69ca330c390a6b0dfbd455d58 -->

#Employee


<!-- START_d09abd39db7a43f432b552c77f600b1e -->
## Employee Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "position": "string",
    "file_id": "integer",
    "quote": "text",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/employees`


<!-- END_d09abd39db7a43f432b552c77f600b1e -->

<!-- START_2067ce55b54a9598a5fb27daec51dadf -->
## Employee create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"nobis","name":"nobis","position":"placeat","file_id":8,"quote":"iure","has_quote":20,"lang":16,"lang_hash":"error","created_at":"occaecati","updated_at":"placeat"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "nobis",
    "name": "nobis",
    "position": "placeat",
    "file_id": 8,
    "quote": "iure",
    "has_quote": 20,
    "lang": 16,
    "lang_hash": "error",
    "created_at": "occaecati",
    "updated_at": "placeat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/employees`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `position` | string |  optional  | no-required position
        `file_id` | integer |  optional  | no-required file_id
        `quote` | text |  optional  | no-required quote
        `has_quote` | integer |  required  | has_quote
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_2067ce55b54a9598a5fb27daec51dadf -->

<!-- START_629679098c47d762a37cfa75bcffb86d -->
## Employee update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/employees/1?id=eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","name":"temporibus","position":"dolor","file_id":14,"quote":"temporibus","has_quote":7,"lang":20,"lang_hash":"eaque","created_at":"natus","updated_at":"non"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/employees/1"
);

let params = {
    "id": "eveniet",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "name": "temporibus",
    "position": "dolor",
    "file_id": 14,
    "quote": "temporibus",
    "has_quote": 7,
    "lang": 20,
    "lang_hash": "eaque",
    "created_at": "natus",
    "updated_at": "non"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/employees/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `position` | string |  optional  | no-required position
        `file_id` | integer |  optional  | no-required file_id
        `quote` | text |  optional  | no-required quote
        `has_quote` | integer |  required  | has_quote
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_629679098c47d762a37cfa75bcffb86d -->

<!-- START_5a41e7d1acaf5736c769afb25c2e7a37 -->
## Employee view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/employees/1?id=odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/employees/1"
);

let params = {
    "id": "odit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "position": "string",
    "file_id": "integer",
    "quote": "text",
    "has_quote": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/employees/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_5a41e7d1acaf5736c769afb25c2e7a37 -->

<!-- START_f8f0fe7d6125b594627b4a465aec5b3b -->
## Employee delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/employees/1?id=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/employees/1"
);

let params = {
    "id": "nobis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/employees/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f8f0fe7d6125b594627b4a465aec5b3b -->

<!-- START_c3b1501f26d96b9bd4056f1aee29bb63 -->
## Employee Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "position": "string",
    "file_id": "integer",
    "quote": "text",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/employees`


<!-- END_c3b1501f26d96b9bd4056f1aee29bb63 -->

<!-- START_9f83b657041e3ac684b324ad39763889 -->
## Employee view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/employees/1?id=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/employees/1"
);

let params = {
    "id": "maxime",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "position": "string",
    "file_id": "integer",
    "quote": "text",
    "has_quote": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/employees/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_9f83b657041e3ac684b324ad39763889 -->

#Event


<!-- START_dbe54594f5930ae336592e9fc27ca1d9 -->
## Event Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "content": "text",
    "carried_out_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/events`


<!-- END_dbe54594f5930ae336592e9fc27ca1d9 -->

<!-- START_04e9f0ef2cf83afbacd301cc420ff702 -->
## Event create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"tempora","title":"alias","slug":"voluptatem","content":"nulla","carried_out_at":"qui","lang":6,"lang_hash":"dolore","created_at":"et","updated_at":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "tempora",
    "title": "alias",
    "slug": "voluptatem",
    "content": "nulla",
    "carried_out_at": "qui",
    "lang": 6,
    "lang_hash": "dolore",
    "created_at": "et",
    "updated_at": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/events`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `content` | text |  optional  | no-required content
        `carried_out_at` | datetime |  optional  | no-required carried_out_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_04e9f0ef2cf83afbacd301cc420ff702 -->

<!-- START_5b27c25a2b9bae65334a12283443c776 -->
## Event update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/events/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"neque","title":"ad","slug":"voluptas","content":"earum","carried_out_at":"reprehenderit","lang":11,"lang_hash":"illum","created_at":"dolores","updated_at":"debitis"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/events/1"
);

let params = {
    "id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "neque",
    "title": "ad",
    "slug": "voluptas",
    "content": "earum",
    "carried_out_at": "reprehenderit",
    "lang": 11,
    "lang_hash": "illum",
    "created_at": "dolores",
    "updated_at": "debitis"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/events/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `content` | text |  optional  | no-required content
        `carried_out_at` | datetime |  optional  | no-required carried_out_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5b27c25a2b9bae65334a12283443c776 -->

<!-- START_89cbd5ce0c13e1f2f5bba79358b9da4e -->
## Event view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/events/1?id=nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/events/1"
);

let params = {
    "id": "nulla",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "content": "text",
    "carried_out_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/events/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_89cbd5ce0c13e1f2f5bba79358b9da4e -->

<!-- START_d42cee6120c5341183907d07ea9a52c1 -->
## Event delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/events/1?id=aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/events/1"
);

let params = {
    "id": "aut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/events/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_d42cee6120c5341183907d07ea9a52c1 -->

<!-- START_9c9fa65f9a287d3c60b4d2a602b09fba -->
## Event Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "content": "text",
    "carried_out_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/events`


<!-- END_9c9fa65f9a287d3c60b4d2a602b09fba -->

<!-- START_de90e31de2ad9e272d38929286d1e41e -->
## Event view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/events/1?id=soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/events/1"
);

let params = {
    "id": "soluta",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "content": "text",
    "carried_out_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/events/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_de90e31de2ad9e272d38929286d1e41e -->

#Feedback


<!-- START_3887bd049862c5d19381750fbbca11a8 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/feedback`


<!-- END_3887bd049862c5d19381750fbbca11a8 -->

<!-- START_36688fecafb90eabc00f6d05c49debcb -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"modi","name":"omnis","phone":"eum","message":"sapiente","services":"autem","email":"beatae","files":"voluptatibus","type":20,"address":"hic","status":3,"drink":14,"deleted_at":"et","created_at":"aliquam","updated_at":"ipsa"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "modi",
    "name": "omnis",
    "phone": "eum",
    "message": "sapiente",
    "services": "autem",
    "email": "beatae",
    "files": "voluptatibus",
    "type": 20,
    "address": "hic",
    "status": 3,
    "drink": 14,
    "deleted_at": "et",
    "created_at": "aliquam",
    "updated_at": "ipsa"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_36688fecafb90eabc00f6d05c49debcb -->

<!-- START_37a6123b379c31e01c14d591d2e99ede -->
## Feedback update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/feedback/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"voluptatem","name":"dolores","phone":"repellat","message":"natus","services":"aut","email":"eveniet","files":"dolores","type":10,"address":"alias","status":9,"drink":4,"deleted_at":"qui","created_at":"veniam","updated_at":"quia"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "quidem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "voluptatem",
    "name": "dolores",
    "phone": "repellat",
    "message": "natus",
    "services": "aut",
    "email": "eveniet",
    "files": "dolores",
    "type": 10,
    "address": "alias",
    "status": 9,
    "drink": 4,
    "deleted_at": "qui",
    "created_at": "veniam",
    "updated_at": "quia"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37a6123b379c31e01c14d591d2e99ede -->

<!-- START_fcf5b7dd1746b6a0aa52cf997c201d53 -->
## Feedback view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/feedback/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_fcf5b7dd1746b6a0aa52cf997c201d53 -->

<!-- START_9d4bfc738229de6a4120ec8a501a543c -->
## Feedback delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/feedback/1?id=officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/feedback/1"
);

let params = {
    "id": "officiis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_9d4bfc738229de6a4120ec8a501a543c -->

<!-- START_b6122cc9a0e0052c2205dbd7c1c86c24 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/feedback`


<!-- END_b6122cc9a0e0052c2205dbd7c1c86c24 -->

<!-- START_92d6887f025b637134ef487e9ea063c7 -->
## Feedback update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/feedback/1?id=pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"error","name":"ea","phone":"perferendis","message":"sequi","services":"ipsa","email":"enim","files":"eum","type":4,"address":"sit","status":13,"drink":12,"deleted_at":"harum","created_at":"nihil","updated_at":"impedit"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/feedback/1"
);

let params = {
    "id": "pariatur",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "error",
    "name": "ea",
    "phone": "perferendis",
    "message": "sequi",
    "services": "ipsa",
    "email": "enim",
    "files": "eum",
    "type": 4,
    "address": "sit",
    "status": 13,
    "drink": 12,
    "deleted_at": "harum",
    "created_at": "nihil",
    "updated_at": "impedit"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_92d6887f025b637134ef487e9ea063c7 -->

<!-- START_001b8019cbeae696d9d99674c5b0f65f -->
## Feedback view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/feedback/1?id=commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/feedback/1"
);

let params = {
    "id": "commodi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "message": "text",
    "services": "text",
    "email": "string",
    "files": "string",
    "type": "integer",
    "address": "string",
    "status": "integer",
    "drink": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_001b8019cbeae696d9d99674c5b0f65f -->

<!-- START_5ea6ab61bf6bf721148887c0ced29d88 -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"nobis","name":"sint","phone":"impedit","message":"molestiae","services":"quis","email":"quia","files":"aspernatur","type":11,"address":"commodi","status":10,"drink":12,"deleted_at":"quis","created_at":"provident","updated_at":"nihil"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "nobis",
    "name": "sint",
    "phone": "impedit",
    "message": "molestiae",
    "services": "quis",
    "email": "quia",
    "files": "aspernatur",
    "type": 11,
    "address": "commodi",
    "status": 10,
    "drink": 12,
    "deleted_at": "quis",
    "created_at": "provident",
    "updated_at": "nihil"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `message` | text |  optional  | no-required message
        `services` | text |  optional  | no-required services
        `email` | string |  optional  | no-required email
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `address` | string |  optional  | no-required address
        `status` | integer |  optional  | no-required status
        `drink` | integer |  optional  | no-required drink
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5ea6ab61bf6bf721148887c0ced29d88 -->

#Filemanager - Filemanager


<!-- START_fe9c328882475a3086bb6c33c57454f7 -->
## api/v1/admin/filemanager
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager`


<!-- END_fe9c328882475a3086bb6c33c57454f7 -->

<!-- START_715d54bdc0dab344c8056f8da3938f11 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/{id}`


<!-- END_715d54bdc0dab344c8056f8da3938f11 -->

<!-- START_20411a9c51efc6beb9d2b0cfdaa697c2 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/{id}`


<!-- END_20411a9c51efc6beb9d2b0cfdaa697c2 -->

<!-- START_3e3d942d2f7e2f296e2564917548fbbc -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/{id}`


<!-- END_3e3d942d2f7e2f296e2564917548fbbc -->

<!-- START_be79ac07fead71b2a35911c7b8325bbd -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"iste"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "iste"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_be79ac07fead71b2a35911c7b8325bbd -->

<!-- START_039192d31a4210f8bedbd5011660a7e9 -->
## api/v1/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/filemanager/{id}`


<!-- END_039192d31a4210f8bedbd5011660a7e9 -->

<!-- START_eb32ba3df74de7e9d5558332f555eb7d -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"earum"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "earum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_eb32ba3df74de7e9d5558332f555eb7d -->

<!-- START_6d588e956c82c24658dfea7f408a9c90 -->
## filemanager
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/filemanager?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/filemanager?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/filemanager",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET filemanager`


<!-- END_6d588e956c82c24658dfea7f408a9c90 -->

#FilemanagerFolder - FilemanagerFolder


<!-- START_dcf48a99f0f5038490a39b1f6b2c5220 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder`


<!-- END_dcf48a99f0f5038490a39b1f6b2c5220 -->

<!-- START_e3bc2403ac8c316cfa2e391d3ed9be43 -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder/{id}`


<!-- END_e3bc2403ac8c316cfa2e391d3ed9be43 -->

<!-- START_38950588f1310f4227cc08b386fd6e75 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/folder`


<!-- END_38950588f1310f4227cc08b386fd6e75 -->

<!-- START_5b9adcd969a5b36ac0b70acd389941ea -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/folder/{id}`


<!-- END_5b9adcd969a5b36ac0b70acd389941ea -->

<!-- START_4ad6b371a68906a389cdf2c85ecd67be -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/folder/{id}`


<!-- END_4ad6b371a68906a389cdf2c85ecd67be -->

#Menu


<!-- START_120df25504813421d08c382ea1398b85 -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menus`


<!-- END_120df25504813421d08c382ea1398b85 -->

<!-- START_0a006fd085f0f6a58e15663e46b9ff08 -->
## Menu create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"maiores","title":"aut","alias":"cupiditate","type":8,"lang":8,"lang_hash":"aperiam","status":18,"deleted_at":"sed","created_at":"non","updated_at":"qui"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "maiores",
    "title": "aut",
    "alias": "cupiditate",
    "type": 8,
    "lang": 8,
    "lang_hash": "aperiam",
    "status": 18,
    "deleted_at": "sed",
    "created_at": "non",
    "updated_at": "qui"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menus`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_0a006fd085f0f6a58e15663e46b9ff08 -->

<!-- START_cdd7a8593bce108fcb08ad3f23ed38f2 -->
## Menu update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/menus/1?id=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"blanditiis","alias":"consequatur","type":1,"lang":8,"lang_hash":"beatae","status":9,"deleted_at":"quaerat","created_at":"reprehenderit","updated_at":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "rerum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "blanditiis",
    "alias": "consequatur",
    "type": 1,
    "lang": 8,
    "lang_hash": "beatae",
    "status": 9,
    "deleted_at": "quaerat",
    "created_at": "reprehenderit",
    "updated_at": "voluptatem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_cdd7a8593bce108fcb08ad3f23ed38f2 -->

<!-- START_57bc6d8afd49366ecd4d89b9ec6acb45 -->
## Menu view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/menus/1?id=saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "saepe",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_57bc6d8afd49366ecd4d89b9ec6acb45 -->

<!-- START_c354f50cc811d23618912b5eb39e5438 -->
## Menu delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/menus/1?id=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menus/1"
);

let params = {
    "id": "sint",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c354f50cc811d23618912b5eb39e5438 -->

<!-- START_43cb73f9290353216bde3837225f298d -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/menus`


<!-- END_43cb73f9290353216bde3837225f298d -->

<!-- START_efa91ebe4ad22b6ab24e5083e5cfad8e -->
## Menu view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/menus/1?id=a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/menus/1"
);

let params = {
    "id": "a",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/menus/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_efa91ebe4ad22b6ab24e5083e5cfad8e -->

<!-- START_d415c76dcd54098871ca0ae9d35da00e -->
## api/v1/menus/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Menu] 1"
}
```

### HTTP Request
`GET api/v1/menus/{slug}`


<!-- END_d415c76dcd54098871ca0ae9d35da00e -->

#MenuItems


<!-- START_495acc66ae87cc5c35d960e9184341d7 -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "integer",
    "menu_id": "integer",
    "title": "string",
    "url": "string",
    "file_id": "integer",
    "sort": "integer",
    "menu_item_parent_id": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file,menuItems"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu-items`


<!-- END_495acc66ae87cc5c35d960e9184341d7 -->

<!-- START_51d7b465e1778f9d17e12028158bc2cb -->
## MenuItems create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menu-items`


<!-- END_51d7b465e1778f9d17e12028158bc2cb -->

<!-- START_92d6314ed16b3f07ad929336e3412daf -->
## api/v1/admin/menu-items/sort
> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/menu-items/sort" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items/sort"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/sort`


<!-- END_92d6314ed16b3f07ad929336e3412daf -->

<!-- START_66a8a7d35110af33e03ba2d1fe4802e7 -->
## MenuItems update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/menu-items/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_66a8a7d35110af33e03ba2d1fe4802e7 -->

<!-- START_a698812008eafe40128b1d65383a38b2 -->
## MenuItems view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/menu-items/1?id=quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "quaerat",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_a698812008eafe40128b1d65383a38b2 -->

<!-- START_1692508af914b496c3c25486cf42c370 -->
## MenuItems delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/menu-items/1?id=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/menu-items/1"
);

let params = {
    "id": "eum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_1692508af914b496c3c25486cf42c370 -->

<!-- START_05e55b5f0d22230cd05901d8dc22cd0d -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "integer",
    "menu_id": "integer",
    "title": "string",
    "url": "string",
    "file_id": "integer",
    "sort": "integer",
    "menu_item_parent_id": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file,menuItems"
    ]
}
```

### HTTP Request
`GET api/v1/menu-items`


<!-- END_05e55b5f0d22230cd05901d8dc22cd0d -->

<!-- START_35253558f1884f62a9b1d770515be85e -->
## MenuItems view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/menu-items/1?id=nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/menu-items/1"
);

let params = {
    "id": "nostrum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_35253558f1884f62a9b1d770515be85e -->

#Page


<!-- START_7a71b1bd6e258a3884186d2da4d20dbb -->
## Page Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/page`


<!-- END_7a71b1bd6e258a3884186d2da4d20dbb -->

<!-- START_8ca1a01257b0cd52ce3101c8e5d1f2d9 -->
## Page create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"illo","title":"vel","slug":"omnis","description":"qui","type":12,"file_id":14,"documents":"sapiente","anons":"rerum","content":"nisi","created_at":"pariatur","updated_at":"aut","lang":8,"lang_hash":"non","status":14,"deleted_at":"et"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "illo",
    "title": "vel",
    "slug": "omnis",
    "description": "qui",
    "type": 12,
    "file_id": 14,
    "documents": "sapiente",
    "anons": "rerum",
    "content": "nisi",
    "created_at": "pariatur",
    "updated_at": "aut",
    "lang": 8,
    "lang_hash": "non",
    "status": 14,
    "deleted_at": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/page`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `anons` | string |  optional  | no-required anons
        `content` | text |  optional  | no-required content
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_8ca1a01257b0cd52ce3101c8e5d1f2d9 -->

<!-- START_2a1432b091d28d3f810186fc5f142ccd -->
## Page update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/page/1?id=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"voluptates","title":"nostrum","slug":"sed","description":"sit","type":16,"file_id":8,"documents":"sequi","anons":"incidunt","content":"eveniet","created_at":"officiis","updated_at":"provident","lang":18,"lang_hash":"veritatis","status":5,"deleted_at":"dolore"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/page/1"
);

let params = {
    "id": "quis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "voluptates",
    "title": "nostrum",
    "slug": "sed",
    "description": "sit",
    "type": 16,
    "file_id": 8,
    "documents": "sequi",
    "anons": "incidunt",
    "content": "eveniet",
    "created_at": "officiis",
    "updated_at": "provident",
    "lang": 18,
    "lang_hash": "veritatis",
    "status": 5,
    "deleted_at": "dolore"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `anons` | string |  optional  | no-required anons
        `content` | text |  optional  | no-required content
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_2a1432b091d28d3f810186fc5f142ccd -->

<!-- START_eb782792d3558cce7c1f5dc2b7c16a05 -->
## Page view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/page/1?id=cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/page/1"
);

let params = {
    "id": "cumque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_eb782792d3558cce7c1f5dc2b7c16a05 -->

<!-- START_ef591b4b065a8b0c294276fcd8768e70 -->
## Page delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/page/1?id=laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/page/1"
);

let params = {
    "id": "laudantium",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_ef591b4b065a8b0c294276fcd8768e70 -->

<!-- START_0c948efd1d98100112b77e0deeb88b02 -->
## Page Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/page`


<!-- END_0c948efd1d98100112b77e0deeb88b02 -->

<!-- START_11eaeebff72e0fe821cd48b15dd88ec1 -->
## Page view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/page/1?id=suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/page/1"
);

let params = {
    "id": "suscipit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "slug": "string",
    "description": "text",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "anons": "string",
    "content": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/page/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_11eaeebff72e0fe821cd48b15dd88ec1 -->

#Post


<!-- START_bdfe5b11e6ffb9352135c5fee8abba56 -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/post`


<!-- END_bdfe5b11e6ffb9352135c5fee8abba56 -->

<!-- START_1c6a567110c15f04c382062ba6491910 -->
## Post create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"omnis","title":"laborum","description":"quaerat","content":"laborum","slug":"quod","top":6,"popular":5,"type":3,"file_id":17,"documents":"veritatis","video":"adipisci","photo_author":"sed","published_at":"nihil","created_at":"tenetur","updated_at":"sint","lang":17,"lang_hash":"officia","status":17,"deleted_at":"iure"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "omnis",
    "title": "laborum",
    "description": "quaerat",
    "content": "laborum",
    "slug": "quod",
    "top": 6,
    "popular": 5,
    "type": 3,
    "file_id": 17,
    "documents": "veritatis",
    "video": "adipisci",
    "photo_author": "sed",
    "published_at": "nihil",
    "created_at": "tenetur",
    "updated_at": "sint",
    "lang": 17,
    "lang_hash": "officia",
    "status": 17,
    "deleted_at": "iure"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/post`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `slug` | string |  optional  | no-required slug
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `photo_author` | string |  optional  | no-required photo_author
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_1c6a567110c15f04c382062ba6491910 -->

<!-- START_15785e46bdb4bc33d8bab7f3c0326342 -->
## Post update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/post/1?id=voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"at","title":"ab","description":"quam","content":"et","slug":"excepturi","top":18,"popular":17,"type":9,"file_id":10,"documents":"corporis","video":"nisi","photo_author":"voluptatibus","published_at":"debitis","created_at":"ut","updated_at":"mollitia","lang":13,"lang_hash":"et","status":4,"deleted_at":"illum"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/post/1"
);

let params = {
    "id": "voluptatibus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "at",
    "title": "ab",
    "description": "quam",
    "content": "et",
    "slug": "excepturi",
    "top": 18,
    "popular": 17,
    "type": 9,
    "file_id": 10,
    "documents": "corporis",
    "video": "nisi",
    "photo_author": "voluptatibus",
    "published_at": "debitis",
    "created_at": "ut",
    "updated_at": "mollitia",
    "lang": 13,
    "lang_hash": "et",
    "status": 4,
    "deleted_at": "illum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `slug` | string |  optional  | no-required slug
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `photo_author` | string |  optional  | no-required photo_author
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
    
<!-- END_15785e46bdb4bc33d8bab7f3c0326342 -->

<!-- START_f962b39ada52df6f28eb7e49876bde65 -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/post/1?id=ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/post/1"
);

let params = {
    "id": "ad",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f962b39ada52df6f28eb7e49876bde65 -->

<!-- START_6322b3410e0903cba77d822597f16ea3 -->
## Post delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/post/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/post/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6322b3410e0903cba77d822597f16ea3 -->

<!-- START_c21ce65c24ad7b3228752eb282145bb4 -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/post`


<!-- END_c21ce65c24ad7b3228752eb282145bb4 -->

<!-- START_2efd298312c3820d1bea7c29befbe5fa -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/post/1?id=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/post/1"
);

let params = {
    "id": "recusandae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "description": "string",
    "content": "text",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "photo_author": "string",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "deleted_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/post/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_2efd298312c3820d1bea7c29befbe5fa -->

#Project


<!-- START_fc2a4353e3093252e672968599713345 -->
## Project Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "slug": "string",
    "files": "string",
    "description": "string",
    "content": "text",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "short_video": "string",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/projects`


<!-- END_fc2a4353e3093252e672968599713345 -->

<!-- START_f042871cfe156b7e7935a8a8d4583581 -->
## Project create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"molestiae","name":"ducimus","slug":"ducimus","files":"assumenda","description":"qui","content":"quia","top":10,"popular":15,"type":19,"file_id":18,"documents":"earum","video":"saepe","short_video":"ut","lang":8,"lang_hash":"vitae","created_at":"ex","updated_at":"et"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "molestiae",
    "name": "ducimus",
    "slug": "ducimus",
    "files": "assumenda",
    "description": "qui",
    "content": "quia",
    "top": 10,
    "popular": 15,
    "type": 19,
    "file_id": 18,
    "documents": "earum",
    "video": "saepe",
    "short_video": "ut",
    "lang": 8,
    "lang_hash": "vitae",
    "created_at": "ex",
    "updated_at": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/projects`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `slug` | string |  optional  | no-required slug
        `files` | string |  optional  | no-required files
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `short_video` | string |  optional  | no-required short_video
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f042871cfe156b7e7935a8a8d4583581 -->

<!-- START_f915875850a5e59c0c9f33af73939a0f -->
## Project update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/projects/1?id=maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"cumque","name":"eius","slug":"atque","files":"quas","description":"aliquam","content":"reprehenderit","top":19,"popular":14,"type":8,"file_id":11,"documents":"hic","video":"est","short_video":"reprehenderit","lang":16,"lang_hash":"nisi","created_at":"est","updated_at":"quidem"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/projects/1"
);

let params = {
    "id": "maxime",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "cumque",
    "name": "eius",
    "slug": "atque",
    "files": "quas",
    "description": "aliquam",
    "content": "reprehenderit",
    "top": 19,
    "popular": 14,
    "type": 8,
    "file_id": 11,
    "documents": "hic",
    "video": "est",
    "short_video": "reprehenderit",
    "lang": 16,
    "lang_hash": "nisi",
    "created_at": "est",
    "updated_at": "quidem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/projects/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `slug` | string |  optional  | no-required slug
        `files` | string |  optional  | no-required files
        `description` | string |  optional  | no-required description
        `content` | text |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `type` | integer |  optional  | no-required type
        `file_id` | integer |  optional  | no-required file_id
        `documents` | string |  optional  | no-required documents
        `video` | string |  optional  | no-required video
        `short_video` | string |  optional  | no-required short_video
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f915875850a5e59c0c9f33af73939a0f -->

<!-- START_fb037aaee188d894a3bf0f64e1b7a2ee -->
## Project view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/projects/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/projects/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "slug": "string",
    "files": "string",
    "description": "string",
    "content": "text",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "short_video": "string",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/projects/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_fb037aaee188d894a3bf0f64e1b7a2ee -->

<!-- START_54666284f6dcb0d594715b29ff3d6a81 -->
## Project delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/projects/1?id=animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/projects/1"
);

let params = {
    "id": "animi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/projects/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_54666284f6dcb0d594715b29ff3d6a81 -->

<!-- START_d4bb0000cd4525b356d3f4e604741ee1 -->
## Project Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "slug": "string",
    "files": "string",
    "description": "string",
    "content": "text",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "short_video": "string",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/projects`


<!-- END_d4bb0000cd4525b356d3f4e604741ee1 -->

<!-- START_c0c7035d6f07233f5023f3108d569268 -->
## Project view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/projects/1?id=minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/projects/1"
);

let params = {
    "id": "minima",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "slug": "string",
    "files": "string",
    "description": "string",
    "content": "text",
    "top": "integer",
    "popular": "integer",
    "type": "integer",
    "file_id": "integer",
    "documents": "string",
    "video": "string",
    "short_video": "string",
    "lang": "integer",
    "lang_hash": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/projects/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_c0c7035d6f07233f5023f3108d569268 -->

#Region


<!-- START_7fc74c6ac2a013fba9d1e10e6c0ec05e -->
## Region Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "bigint",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "stations"
    ]
}
```

### HTTP Request
`GET api/v1/admin/regions`


<!-- END_7fc74c6ac2a013fba9d1e10e6c0ec05e -->

<!-- START_80bd3977a15ae926683aad618f2a0e54 -->
## Region create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"enim","name_uz":"dolor","name_ru":"esse","name_en":"et","code":"non","country_id":"aut","status":14,"deleted_at":"alias","created_at":"cumque","updated_at":"voluptas"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "enim",
    "name_uz": "dolor",
    "name_ru": "esse",
    "name_en": "et",
    "code": "non",
    "country_id": "aut",
    "status": 14,
    "deleted_at": "alias",
    "created_at": "cumque",
    "updated_at": "voluptas"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/regions`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `country_id` | bigint |  optional  | no-required country_id
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_80bd3977a15ae926683aad618f2a0e54 -->

<!-- START_c8421ec2e18e736d35d3f3b3a5fcabd2 -->
## Region update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/regions/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"assumenda","name_uz":"dicta","name_ru":"occaecati","name_en":"et","code":"dolor","country_id":"provident","status":14,"deleted_at":"est","created_at":"nisi","updated_at":"est"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/regions/1"
);

let params = {
    "id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "assumenda",
    "name_uz": "dicta",
    "name_ru": "occaecati",
    "name_en": "et",
    "code": "dolor",
    "country_id": "provident",
    "status": 14,
    "deleted_at": "est",
    "created_at": "nisi",
    "updated_at": "est"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `country_id` | bigint |  optional  | no-required country_id
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_c8421ec2e18e736d35d3f3b3a5fcabd2 -->

<!-- START_9c5ffc66081866b68c168dc6bd413a1d -->
## Region view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/regions/1?id=perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/regions/1"
);

let params = {
    "id": "perferendis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "bigint",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_9c5ffc66081866b68c168dc6bd413a1d -->

<!-- START_984757b575748efe632249400d26121a -->
## Region delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/regions/1?id=dicta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/regions/1"
);

let params = {
    "id": "dicta",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_984757b575748efe632249400d26121a -->

<!-- START_9f8b25db943f4986cb344335635be033 -->
## Region Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "bigint",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "stations"
    ]
}
```

### HTTP Request
`GET api/v1/regions`


<!-- END_9f8b25db943f4986cb344335635be033 -->

<!-- START_4ce887194f23acd83c2a92657b977660 -->
## Region view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/regions/1?id=eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/regions/1"
);

let params = {
    "id": "eius",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "bigint",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_4ce887194f23acd83c2a92657b977660 -->

#Service


<!-- START_bbc2d47dbe88455135e8f07d1858460f -->
## Service Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "short_description": "text",
    "file_id": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/services`


<!-- END_bbc2d47dbe88455135e8f07d1858460f -->

<!-- START_24f9bdbcd8c9baae701e56c9b07553ee -->
## Service create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ipsa","name":"ipsa","short_description":"sed","file_id":12,"type":20,"lang":10,"lang_hash":"iusto","status":14,"created_at":"facilis","updated_at":"autem"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ipsa",
    "name": "ipsa",
    "short_description": "sed",
    "file_id": 12,
    "type": 20,
    "lang": 10,
    "lang_hash": "iusto",
    "status": 14,
    "created_at": "facilis",
    "updated_at": "autem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/services`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `short_description` | text |  optional  | no-required short_description
        `file_id` | integer |  optional  | no-required file_id
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_24f9bdbcd8c9baae701e56c9b07553ee -->

<!-- START_d52b3d1235f67e82a5c2e872f41e3002 -->
## Service update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/services/1?id=porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","name":"voluptatem","short_description":"veniam","file_id":13,"type":4,"lang":20,"lang_hash":"consequatur","status":1,"created_at":"quam","updated_at":"beatae"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/services/1"
);

let params = {
    "id": "porro",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "name": "voluptatem",
    "short_description": "veniam",
    "file_id": 13,
    "type": 4,
    "lang": 20,
    "lang_hash": "consequatur",
    "status": 1,
    "created_at": "quam",
    "updated_at": "beatae"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/services/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `short_description` | text |  optional  | no-required short_description
        `file_id` | integer |  optional  | no-required file_id
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_d52b3d1235f67e82a5c2e872f41e3002 -->

<!-- START_0c3a68dd1372d7c4673aaa77af878e70 -->
## Service view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/services/1?id=voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/services/1"
);

let params = {
    "id": "voluptatem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "short_description": "text",
    "file_id": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/services/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_0c3a68dd1372d7c4673aaa77af878e70 -->

<!-- START_6b0e8e8379a6ae665ed3d0cf9668d53c -->
## Service delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/services/1?id=facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/services/1"
);

let params = {
    "id": "facilis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/services/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6b0e8e8379a6ae665ed3d0cf9668d53c -->

<!-- START_3c8c4484a110a0ade00412f7d0833d72 -->
## Service Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "short_description": "text",
    "file_id": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/services`


<!-- END_3c8c4484a110a0ade00412f7d0833d72 -->

<!-- START_ff28ef383ebe7919b5934654065090b9 -->
## Service view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/services/1?id=recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/services/1"
);

let params = {
    "id": "recusandae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "short_description": "text",
    "file_id": "integer",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/services/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_ff28ef383ebe7919b5934654065090b9 -->

#Settings


<!-- START_bb368aac5e0c8783f374f190bedb96da -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file"
    ]
}
```

### HTTP Request
`GET api/v1/admin/settings`


<!-- END_bb368aac5e0c8783f374f190bedb96da -->

<!-- START_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->
## Settings create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"sit","name":"quae","value":"vero","file_id":15,"slug":"quae","link":"deserunt","alias":"quam","lang_hash":"incidunt","sort":17,"lang":10,"status":12,"deleted_at":"assumenda","created_at":"amet","updated_at":"repellat"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "sit",
    "name": "quae",
    "value": "vero",
    "file_id": 15,
    "slug": "quae",
    "link": "deserunt",
    "alias": "quam",
    "lang_hash": "incidunt",
    "sort": 17,
    "lang": 10,
    "status": 12,
    "deleted_at": "assumenda",
    "created_at": "amet",
    "updated_at": "repellat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/settings`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `file_id` | integer |  optional  | no-required file_id
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->

<!-- START_f59f6b955fb8574203828f15d21c1f85 -->
## Settings update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/settings/1?id=quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quia","name":"sunt","value":"molestias","file_id":3,"slug":"sit","link":"eos","alias":"autem","lang_hash":"qui","sort":8,"lang":11,"status":2,"deleted_at":"illo","created_at":"qui","updated_at":"ex"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "quasi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quia",
    "name": "sunt",
    "value": "molestias",
    "file_id": 3,
    "slug": "sit",
    "link": "eos",
    "alias": "autem",
    "lang_hash": "qui",
    "sort": 8,
    "lang": 11,
    "status": 2,
    "deleted_at": "illo",
    "created_at": "qui",
    "updated_at": "ex"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `file_id` | integer |  optional  | no-required file_id
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f59f6b955fb8574203828f15d21c1f85 -->

<!-- START_b177116d01d38b1ea00bb5899b048445 -->
## Settings view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/settings/1?id=ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "ab",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_b177116d01d38b1ea00bb5899b048445 -->

<!-- START_d18ac32b6b0a3692f9dbb33341c411e4 -->
## Settings delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/settings/1?id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/settings/1"
);

let params = {
    "id": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_d18ac32b6b0a3692f9dbb33341c411e4 -->

<!-- START_0f7c405a059a084f42490f2decb1584b -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ],
    "include": [
        "file"
    ]
}
```

### HTTP Request
`GET api/v1/settings`


<!-- END_0f7c405a059a084f42490f2decb1584b -->

<!-- START_53cf901728da55cbcf48dc43b1c2bc93 -->
## Settings view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/settings/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/settings/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "file_id": "integer",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_53cf901728da55cbcf48dc43b1c2bc93 -->

<!-- START_c674db53bc3180e8b31822aff2533d2e -->
## api/v1/settings/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Settings] 1"
}
```

### HTTP Request
`GET api/v1/settings/{slug}`


<!-- END_c674db53bc3180e8b31822aff2533d2e -->

#Tag


<!-- START_51f610d273d4e4ad54131bf65f34efdb -->
## Tag Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/tags`


<!-- END_51f610d273d4e4ad54131bf65f34efdb -->

<!-- START_f508b30606c01e9602f42f5dc977966f -->
## Tag create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"omnis","name":"harum","type":5,"created_at":"nobis","updated_at":"dolor"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "omnis",
    "name": "harum",
    "type": 5,
    "created_at": "nobis",
    "updated_at": "dolor"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/tags`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f508b30606c01e9602f42f5dc977966f -->

<!-- START_418571704e1cf715b93f8f72475b68bd -->
## Tag update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/tags/1?id=rem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ratione","name":"cupiditate","type":4,"created_at":"voluptas","updated_at":"debitis"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/tags/1"
);

let params = {
    "id": "rem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ratione",
    "name": "cupiditate",
    "type": 4,
    "created_at": "voluptas",
    "updated_at": "debitis"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/tags/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_418571704e1cf715b93f8f72475b68bd -->

<!-- START_999f5f2f20de99abcc2ceba8b2659999 -->
## Tag view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/tags/1?id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/tags/1"
);

let params = {
    "id": "inventore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/tags/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_999f5f2f20de99abcc2ceba8b2659999 -->

<!-- START_911975bf73293e3fe870061d4093958a -->
## Tag delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/tags/1?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/tags/1"
);

let params = {
    "id": "et",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/tags/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_911975bf73293e3fe870061d4093958a -->

<!-- START_3828cff9a39755106f385f8d18193cd5 -->
## Tag Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/tags`


<!-- END_3828cff9a39755106f385f8d18193cd5 -->

<!-- START_8d8a977d7665b39e20e931db48a675ef -->
## Tag view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/tags/1?id=distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/tags/1"
);

let params = {
    "id": "distinctio",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/tags/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_8d8a977d7665b39e20e931db48a675ef -->

#User


<!-- START_a10aa585c982194fd4c4619b3a25f98d -->
## User sign-in

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/user/sign-in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"enim","password":"veritatis"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user/sign-in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "enim",
    "password": "veritatis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/sign-in`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | name
        `password` | string |  required  | password
    
<!-- END_a10aa585c982194fd4c4619b3a25f98d -->

<!-- START_9cafc90ccf899b3989f83a1a368ffcd5 -->
## api/v1/admin/user
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user`


<!-- END_9cafc90ccf899b3989f83a1a368ffcd5 -->

<!-- START_63b209fd4db9f1789cf3050b5b5e742e -->
## User get-me

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/user/get-me?token=vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user/get-me"
);

let params = {
    "token": "vero",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user/get-me`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `token` |  optional  | string required token

<!-- END_63b209fd4db9f1789cf3050b5b5e742e -->

<!-- START_0650f5672796d52740f0b0c7143a2e2d -->
## User logout

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/logout`


<!-- END_0650f5672796d52740f0b0c7143a2e2d -->

<!-- START_a8f2cd73f7f241bac59f75ba0b3cb4bd -->
## User create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user`


<!-- END_a8f2cd73f7f241bac59f75ba0b3cb4bd -->

<!-- START_b84bc995ebaf16fcbb87cec8a93d6d99 -->
## User update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/{id}`


<!-- END_b84bc995ebaf16fcbb87cec8a93d6d99 -->

<!-- START_b60fec1ab473fb3e428a9fbfee70e275 -->
## Update current user

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/user/update-admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/user/update-admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/update-admin`


<!-- END_b60fec1ab473fb3e428a9fbfee70e275 -->

#Vacancy


<!-- START_e9686db97667cbfe58c9c160051dd1d1 -->
## Vacancy Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/vacancies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/vacancies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "description": "text",
    "files": "string",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/vacancies`


<!-- END_e9686db97667cbfe58c9c160051dd1d1 -->

<!-- START_4f5696554749dd3a06c980b9f12121ad -->
## Vacancy create

> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/admin/vacancies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quasi","name":"excepturi","description":"consequuntur","files":"qui","lang":20,"lang_hash":"explicabo","status":8,"type":17,"created_at":"aliquid","updated_at":"saepe"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/vacancies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quasi",
    "name": "excepturi",
    "description": "consequuntur",
    "files": "qui",
    "lang": 20,
    "lang_hash": "explicabo",
    "status": 8,
    "type": 17,
    "created_at": "aliquid",
    "updated_at": "saepe"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/vacancies`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `description` | text |  optional  | no-required description
        `files` | string |  optional  | no-required files
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_4f5696554749dd3a06c980b9f12121ad -->

<!-- START_2c01d50e51fafb7977c7082a62ab388d -->
## Vacancy update

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/vacancies/1?id=nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"vero","name":"ea","description":"eligendi","files":"sit","lang":20,"lang_hash":"hic","status":14,"type":5,"created_at":"ratione","updated_at":"voluptatum"}'

```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/vacancies/1"
);

let params = {
    "id": "nobis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "vero",
    "name": "ea",
    "description": "eligendi",
    "files": "sit",
    "lang": 20,
    "lang_hash": "hic",
    "status": 14,
    "type": 5,
    "created_at": "ratione",
    "updated_at": "voluptatum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/vacancies/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `description` | text |  optional  | no-required description
        `files` | string |  optional  | no-required files
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `type` | integer |  optional  | no-required type
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_2c01d50e51fafb7977c7082a62ab388d -->

<!-- START_328601564bf994746a3f18c7276adbee -->
## Vacancy view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/vacancies/1?id=inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/vacancies/1"
);

let params = {
    "id": "inventore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "description": "text",
    "files": "string",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/vacancies/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_328601564bf994746a3f18c7276adbee -->

<!-- START_0d79aa88da3288ee1644af4f9287fd08 -->
## Vacancy delete

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/vacancies/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/vacancies/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/vacancies/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_0d79aa88da3288ee1644af4f9287fd08 -->

<!-- START_6579630b7562f327b6e7da5d2b2f08a7 -->
## Vacancy Get all

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/vacancies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/vacancies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "description": "text",
    "files": "string",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/vacancies`


<!-- END_6579630b7562f327b6e7da5d2b2f08a7 -->

<!-- START_23793ebcbb758e255110ff3939689b47 -->
## Vacancy view

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/vacancies/1?id=aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/vacancies/1"
);

let params = {
    "id": "aperiam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "description": "text",
    "files": "string",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "type": "integer",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/vacancies/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_23793ebcbb758e255110ff3939689b47 -->

#general


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/_debugbar/clockwork/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/_debugbar/cache/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://oks.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://oks.uz/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://oks.uz/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://oks.uz/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://oks.uz/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://oks.uz/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_f71d42906b47ab713f8411c8c493e506 -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/translations/list`


<!-- END_f71d42906b47ab713f8411c8c493e506 -->

<!-- START_c96cc5a0466d8a5baba7befaeae42249 -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X PUT \
    "http://oks.uz/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/translations/list`


<!-- END_c96cc5a0466d8a5baba7befaeae42249 -->

<!-- START_5be9faf9b0d7c45424171e8d54f6cd0b -->
## api/v1/admin/translations/{id}
> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/admin/translations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/admin/translations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/translations/{id}`


<!-- END_5be9faf9b0d7c45424171e8d54f6cd0b -->

<!-- START_e4b1c038cef3e5bbf06f5d11b70fee83 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/translations/translation/{language}`


<!-- END_e4b1c038cef3e5bbf06f5d11b70fee83 -->

<!-- START_cb10488f39df33f9ecdaf78061412724 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation/{language}`


<!-- END_cb10488f39df33f9ecdaf78061412724 -->

<!-- START_164339e0e1113887df86d42b21046bdd -->
## api/v1/translations/{id:d+}
> Example request:

```bash
curl -X DELETE \
    "http://oks.uz/api/v1/translations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/translations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/translations/{id:d+}`


<!-- END_164339e0e1113887df86d42b21046bdd -->

<!-- START_56b41197ebd28a5defa525447e06ea99 -->
## api/v1/translations/translation
> Example request:

```bash
curl -X POST \
    "http://oks.uz/api/v1/translations/translation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/api/v1/translations/translation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation`


<!-- END_56b41197ebd28a5defa525447e06ea99 -->

<!-- START_ea94c0913f19e66371e9ea92fd5ac136 -->
## translations
> Example request:

```bash
curl -X GET \
    -G "http://oks.uz/translations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://oks.uz/translations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET translations`


<!-- END_ea94c0913f19e66371e9ea92fd5ac136 -->



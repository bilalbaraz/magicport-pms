# API Endpoints

This document provides an overview of the API endpoints, detailing their purpose, HTTP methods, required parameters, and example responses.

## Base URL

All requests should be made to the following base URL:

```bash
http://localhost/api
```

## Endpoints

### 1. **Sign Up**

**Endpoint:** `/auth/sign-up`  
**Method:** `POST`

**Request Parameters:**

| Parameter  | Type     | Required | Description                        |
|------------|----------|----------|------------------------------------|
| `name`    | `string` | Yes      | The name of the user. Must be a string. |
| `email`    | `string` | Yes      | The email address of the user. Must be a valid email format. |
| `password` | `string` | Yes      | The password of the user. Should meet security requirements (e.g., minimum length, complexity). |

### 2. **Sign In**

**Endpoint:** `/auth/sign-in`  
**Method:** `POST`

**Request Parameters:**

| Parameter  | Type     | Required | Description                        |
|------------|----------|----------|------------------------------------|
| `email`    | `string` | Yes      | The email address of the user. Must be a valid email format. |
| `password` | `string` | Yes      | The password of the user. Should meet security requirements (e.g., minimum length, complexity). |

### 3. **Profile**

**Endpoint:** `/auth/profile`  
**Method:** `GET`

Retrieves authenticated user informations.

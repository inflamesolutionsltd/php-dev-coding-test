# Part 3: Laravel Task

## Task
Build a basic API for products.

1. Create a Product model and migration.
2. Create a ProductController with methods:
   - index(), store(), show($id), update($id), destroy($id)
3. Define API routes in `routes/api.php`.
4. Validate inputs and return proper JSON responses.

### Sample GET /api/products response:
```json
[
    {
        "id": 1,
        "name": "Sample Product",
        "price": 200,
        "created_at": "2025-07-29",
        "updated_at": "2025-07-29"
    }
]
```

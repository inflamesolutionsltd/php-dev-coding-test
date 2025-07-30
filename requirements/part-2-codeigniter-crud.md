# Part 2: CodeIgniter 3 Task

## Task
Create a simple product management module with the following requirements:

1. Create a `products` table with fields: id, name, price, created_at, updated_at.
2. Create a controller `Products.php` with methods: 
   - index(), create(), store(), edit($id), update($id), delete($id)
3. Create a model `Product_model.php` with methods:
   - get_all(), get_by_id($id), insert($data), update($id, $data), delete($id)
4. Create views: 
   - index.php, create.php, edit.php
5. Use CI form validation and query builder.

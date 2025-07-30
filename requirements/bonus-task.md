# Bonus Task

## Debug & Optimize
You are given this Laravel query:
```php
$products = DB::table('products')->get();
foreach ($products as $product) {
    $category = DB::table('categories')->where('id', $product->category_id)->first();
    $product->category_name = $category->name;
}
return $products;
```

### Questions
- What is wrong with this approach?
- Rewrite it in an optimized way using Eloquent.

# Eloquent ORM CRUD
>For update method timestamps should include in Model
<br/>
>Eloquent doesn't support put method untill v9
<br/>
>Front End Design Idea <a href='https://www.elementpack.pro/'>Link</a>
>Lumen Generator <a href='https://github.com/flipboxstudio/lumen-generator'>Link</a>

### Model Properties
> Description  Query

 <p>`To define table name`  protected $table = 'table name'; </p>
 <p>`To define primary column`  protected $primaryKey = 'id';</p>
 <p>`To define increment status` public $incrementing = false</p>
 <p>`To define primary column data type` protected $keyTypes </p>
 <p>`To define timestamps status` public $timestamps = false;</p>
 <p>`TO define date format` protected $dateFormat = 'U'; </p>
 <p>`To define db connection` protected $connection = 'connec</p>

### **Uncomment AuthServiceProvider and Authenticate Middleware**

<p>Go to app.php under bootstarp and uncomment those section for laravel authenticate</p>

```
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class)
$app->register(App\Providers\AuthServiceProvider::class)
```

### **The authenticate topics will managed by two files**
<p>The authenticate file under miidleware file and his method name handle.</p> 
<p>The authServiceProvider file under Provider file and his method name boot.</p>
<small>
Basic logic are includeed under boot method
</small>


### Acess token Gneration concept

@Uncomment those App service provider
```
$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);
```
@Uncomment middleware

```
$app->middleware([
    App\Http\Middleware\ExampleMiddleware::class
]);

$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);
```

@Uncomment Facades and elequent
```
$app->withFacades();

$app->withEloquent();
```

@Add access token model and controller following database acess_token table

### Note For JWT token access_token table not necessary

@make token .env file
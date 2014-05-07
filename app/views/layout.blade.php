 <!DOCTYPE HTML>
<html>
<head>
     {{ HTML::style('css/bootstrap.min.css'); }}
     {{ HTML::style('css/blog-post.css'); }}
     <title>
     	
     </title>
</head>
<body>
<h1>@yield('title-section')</h2>
<div class="container">
        <div class="row">
            <div class="col-lg-8">
@yield('body-section')
</div>
</div>
</div>

</body>
</html>
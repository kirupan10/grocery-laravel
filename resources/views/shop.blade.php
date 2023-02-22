@include('includes.head', ['title' => '| Shop'])
<!-- Top Bar Start -->
@include('includes.Topbar')
<!-- Top Bar End -->
<!-- Header Start -->
@include('includes.header')
<!-- Header End -->
@include('includes.page', ['name' => 'shop'])
<!-- Shop  -->
@include('includes.shop')
<!-- Include file from include/footer.blade.php file -->
@include('includes.footer')

 @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
   @section('content')




<h1>Resources used</h1>
<h2>Laravel</h2>

<ul>
  <li>HTTP session. Laravel. (n.d.). Retrieved November 1, 2021, from https://laravel.com/docs/8.x/session. </li>
  <li>Authentication. Laravel. (n.d.). Retrieved November 10, 2021, from https://laravel.com/docs/8.x/authentication. </li>
  <li>File storage. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/5.8/filesystem.  </li>
  <li>Resetting passwords. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/passwords.  </li>
  <li>Middleware. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/middleware.  </li>
  <li>Database: Seeding. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/seeding.  </li>
  <li>CSRF protection. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/csrf.  </li>
   <li>Eloquent: Getting started. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/eloquent.  </li>
   <li>Digamber, D. I. am, &amp; Digamber. (2021, November 21). Laravel 8 contact form example tutorial. positronX.io. Retrieved December 1, 2021, from https://www.positronx.io/laravel-contact-form-example-tutorial/.  </li>
    <li>YouTube. (n.d.). Https://studio.youtube.com/video/NXAFAfyhm8Y/edithttps://www.youtube.com/watch?v=ObCzCnZIe8w&amp;t=242s. YouTube. Retrieved December 1, 2021, from https://www.youtube.com/playlist?list=PLjYyUxBwRq_q5uKfIUkl_LUMbEueOUcvg.   </li>
  <li>Laracasts. (n.d.). Retrieved December 1, 2021, from https://laracasts.com/discuss/channels/laravel/save-image-to-public-folder. </li>
     <li>File storage. Laravel. (n.d.). Retrieved December 1, 2021, from https://laravel.com/docs/8.x/filesystem#the-public-disk. </li>
    <li>Vishwanth Iron HeartVishwanth Iron Heart                    66411 gold badge66 silver badges2020 bronze badges, Alexey MezeninAlexey Mezenin                    143k2020 gold badges257257 silver badges253253 bronze badges, tanvirjahantanvirjahan                    16611 gold badge11 silver badge88 bronze badges, PeejePeeje                    44522 silver badges99 bronze badges, &amp; channasmcschannasmcs                    1. (1964, May 1). How do I add images in Laravel View? Stack Overflow. Retrieved December 1, 2021, from https://stackoverflow.com/questions/36441679/how-do-i-add-images-in-laravel-view/36441822.   </li>
</ul>

   <h2>Bootstrap</h2>
   <ul>
  <li>Mark Otto, J. T. (n.d.). Layout. · Bootstrap v5.1. Retrieved December 1, 2021, from https://getbootstrap.com/docs/5.1/forms/layout/.  </li>
  <li>Mark Otto, J. T. (n.d.). Cards. · Bootstrap. Retrieved December 1, 2021, from https://getbootstrap.com/docs/4.1/components/card/.  </li>
  <li>Bootstrap footer - examples &amp; tutorial. MDB. (n.d.). Retrieved December 1, 2021, from https://mdbootstrap.com/docs/standard/navigation/footer/.  </li>
 
 
</ul>



   @endsection
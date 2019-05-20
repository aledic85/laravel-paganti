<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta charset="utf-8">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
     <title>Paganti</title>
   </head>
   <body>
     <div class="container">
       <div class="row flex-column align-items-center mt-5">
         @yield('content')
       </div>
     </div>
   </body>
 </html>

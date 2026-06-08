<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
    @include('admin.partials.navbar')

    <main>
        @include('admin.partials.hero')
        @include('admin.partials.category')
        @include('admin.partials.about')
        @include('admin.partials.menu')
        @include('admin.partials.special')
        @include('admin.partials.gallery')
        @include('admin.partials.history')
        @include('admin.partials.player')
        @include('admin.partials.blog')
        @include('admin.partials.reservation')
        @include('admin.partials.contact')
        @include('admin.partials.footer')
    </main>


    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

<head>
	<script src="https://connect.facebook.net/en_US/sdk.js?hash=50e2b0523a26816aa86291d59d0f1a93"
			async=""
			crossorigin="anonymous"></script>
	<script id="facebook-jssdk" async="" src="//connect.facebook.net/en_US/sdk.js"></script>
	<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PWN4T5S"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script id="website-schema"
			type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebSite","name":"Fikri Mastor","alternateName":"Fikri Mastor","description":"Fikiranku","url":"https:\/\/fikrimastor.com","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/fikrimastor.com\/?s={search_term_string}"},"query-input":"required name=search_term_string"}}
	</script>
	<meta property="og:url" content="https://fikrimastor.com/">
	<meta property="og:site_name" content="Fikri Mastor">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://blog.fikrimastor.com/app/uploads/2018/11/FikriMastor_1nov2015.jpg">
	<meta property="og:image:secure_url" content="https://blog.fikrimastor.com/app/uploads/2018/11/FikriMastor_1nov2015.jpg">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="640">
	<meta property="fb:pages" content="293522110686838">
	<meta property="fb:admins" content="293522487353467">
	<meta property="fb:app_id" content="519366794924918">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@FikriMastor">
	<meta name="twitter:creator" content="@FikriMastor">
	
    {{-- Fav Icon --}}
	@php $assetUrl = config('app.wp_asset_url'); @endphp
	@if(! is_null($assetUrl))
		<link rel="icon" href="{{ $assetUrl }}/app/uploads/2016/10/cropped-FM-1-32x32.png" sizes="32x32">
		<link rel="icon" href="{{ $assetUrl }}/app/uploads/2016/10/cropped-FM-1-192x192.png" sizes="192x192">
		<link rel="apple-touch-icon" href="{{ $assetUrl }}/app/uploads/2016/10/cropped-FM-1-180x180.png">
	@endif
</head>
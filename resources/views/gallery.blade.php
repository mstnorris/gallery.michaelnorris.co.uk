<!DOCTYPE html>
<html lang="en">
<head>
    <title>Michael Norris Gallery</title>
    <meta charset="utf-8" />
    <meta name="viewport" id="jb-viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="" />

    <!-- START OPEN GRAPH TAGS-->
    <meta property="og:title" content="Michael Norris Gallery" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <!-- END OPEN GRAPH TAGS-->

    <style type="text/css">
        body {
            margin: 0px;
        }
    </style>
</head>
<body>
<!--START JUICEBOX EMBED-->
<script src="/js/juicebox.js"></script>
<script>
    new juicebox({
        containerId: 'juicebox-container',
        galleryWidth: '100%',
        galleryHeight: '100%',
        backgroundColor: '#222222'
    });
</script>
<div id="juicebox-container">
    <!-- Image gallery content for non-javascript devices -->
    <noscript>
        <h1>Michael Norris Gallery</h1>
        <p></p>
        @foreach ( $photos as $photo )
            <p><img src="{{ public_path() . "/images/" . $photo->path }}" title="{{ $photo->path }}" alt="" /><br>{{ $photo->path }} </p>
        @endforeach
    </noscript>
</div>
<!--END JUICEBOX EMBED-->
</body>
</html>
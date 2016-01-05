<?xml version="1.0" encoding="UTF-8"?>
<juiceboxgallery
    imageQuality="99"
    thumbWidth="120"
    thumbHeight="120"
    thumbQuality="99"
    useLargeImages="true"
    largeImageQuality="99"
    resizeOnImport="true"
    useThumbDots="false"
    useFullscreenExpand="true"
    enableLooping="true"
    maxImageWidth="1920"
    maxImageHeight="1440"
    largeImageWidth="1560"
    largeImageHeight="1920"
    captionPosition="OVERLAY_IMAGE"
>
    @foreach ( $photos as $photo )
        <image imageURL="{{ '/images/' . $photo->path }}"
               thumbURL="{{ '/thumbs/' . $photo->path }}"
               linkURL="{{ '/images/' . $photo->path }}"
               linkTarget="_blank"
            sourcePath="{{ '/images/' .$photo->path }}"
               largeImageURL="{{ '/images/large/' . $photo->path }}">
            <title><![CDATA[{{ $photo->path }}]]></title>
            <caption><![CDATA[{{ $photo->path }}]]></caption>
        </image>
    @endforeach
</juiceboxgallery>
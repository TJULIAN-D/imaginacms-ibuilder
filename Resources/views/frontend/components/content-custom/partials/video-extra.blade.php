<div class="{{$orderClasses["videoExternal"] ?? 'col-12 order-5'}} custom-item-video-external">
  <div class="video-external {{$videoExternalClass}}">
    @foreach($videoExternal as $external)
      @php
        $video = $item->options->{$external};
        $exists = strpos($video, 'youtube');
        if($exists !== false) {
            $query = parse_url($video, PHP_URL_QUERY);
            parse_str($query, $params);
            if(isset($params['v'])){
                $youtubeId = $params['v'];
                $video = 'https://www.youtube.com/embed/'.$youtubeId;
            }
        }
      @endphp
      @if(isset($video) && !empty($video))
        <div class="video-external-mini {{$videoExternalMiniClass}}">
          @if($videoExternalResponsive!=='none')
            <div class="embed-responsive {{$videoExternalResponsive}}">
              <iframe class="embed-responsive-item" src="{{$video}}"></iframe>
            </div>
          @else
            <iframe allowfullscreen width="{{$videoExternalWidth}}" height="{{$videoExternalHeight}}"
                    src="{{$video}}"></iframe>
          @endif
        </div>
      @endif
    @endforeach
  </div>
</div>
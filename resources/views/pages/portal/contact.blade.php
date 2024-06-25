@extends('layouts.portal')

@section('title')
    Kontak
@endsection

@section('portal_content')
    <div class="main_content pb-50 pt-50">
        <div class="page-header page-header-style-1 text-center">
            <div class="container">
                {{-- <h2><span class="color2">Kontak</span></h2> --}}

                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="entry-main-content">
                        {!! $item->contact_content !!}
                    </div>
                </div>
            </div>
            <br />

            <div id="disqus_thread"></div>
        </div>
    </div>


    {{-- DISQUSS KOMENTAR  --}}

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    
         **/

        var disqus_config = function() {
            this.page.url = '{{ URL::current() }}'; // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = ''; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://oasedata.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
@endsection

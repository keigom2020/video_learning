<!-- <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'> -->
<nav class="container pt-4">
  <ul class="row">
    <!-- <li class="mr-2">
      <a href={{ route('article.index') }}>記事一覧</a>
    </li> -->
    <li class="mr-2">
      <a href={{ route('courses') }}>コース一覧</a>
    </li>
    <li class="mr-2">
      <a href={{ route('insurance') }}>保険コース</a>
    </li>
    <li class="mr-2">
      <a href={{ route('realestate') }}>不動産コース</a>
    </li>
    <li class="mr-2">
      <a href={{ route('stock') }}>証券投資コース</a>
    </li>

    <!-- <li class="">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSdptWokRvN-CRv-GjtcmTZExpBzozE-2HS8Lh7xV5Odv7Jk1A/viewform?vc=0&c=0&w=1&flr=0&gxids=7628" target="_blank" rel="noopener">ワンポイントレッスン申し込み</a>
    </li> -->

    @can('system-only')
    <li class="mr-2">
      <a href={{ route('video.index') }}>動画一覧・編集画面</a>
    </li>
    @endcan
    
  </ul>
</nav>

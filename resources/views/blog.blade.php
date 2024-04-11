@extends('layout.default')

@section('content')

<div id="content">
  <div class="wrapper">
    <div class="postbody">
      <div class="bixbox">
        <div class="releases"><h1>Blogs</h1></div>
        <div class="bloglist">
          <article
            class="blogbox hentry"
            itemscope="itemscope"
            itemtype="http://schema.org/CreativeWork">
            <div class="innerblog">
              <div class="thumb">
                <a
                  href="/blog-detail"
                  title="Manhwa ในยุคสมัย 2023"
                  itemprop="url"
                >
                  <img
                    width="150"
                    height="150"
                    src="#"
                    class="attachment-thumbnail size-thumbnail wp-post-image"
                    alt=""
                    itemprop="image"
                    title="Manhwa ในยุคสมัย 2023"
                    decoding="async"
                  />
                  <span class="btags">manga</span>
                </a>
              </div>
              <div class="infoblog">
                <header class="entry-header">
                  <h2 class="entry-title" itemprop="headline">
                    <a
                      href="#"
                      title="Manhwa ในยุคสมัย 2023"
                      itemprop="url"
                    >
                      Manhwa ในยุคสมัย 2023
                    </a>
                  </h2>
                </header>
                <div class="entry-content" itemprop="text">
                  <p>Manhwa ในยุคสมัย 2023: การเปลี…</p>
                </div>
                <div class="entry-meta">
                  <span class="author vcard"
                    ><i class="far fa-user"></i>
                    <i class="fn">manga168</i></span
                  >
                  ·
                  <span
                    ><i class="far fa-clock"></i>
                    <time
                      itemprop="datePublished"
                      datetime="2023-06-10T06:40:54+07:00"
                      class="updated"
                      >มิ.ย. 10, 2023</time
                    ></span
                  >
                  <span class="hide"
                    ><time
                      itemprop="dateModified"
                      datetime="2023-06-10T06:40:54+07:00"
                      >มิถุนายน 10, 2023</time
                    ></span
                  >
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="pagination"></div>
      </div>
    </div>
     <!-- Sider Bar -->
        @include('layout.rightbar')
  </div>
</div>


@endsection

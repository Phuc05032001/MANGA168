@extends('layout.default')

@section('content')

     <div id="content">
        <div class="wrapper">
         <div class="postbody">
            <div class="bixbox">
              <div class="releases">
                <h1><span>รายชื่อมังงะ A-Z</span></h1>
              </div>
              <div class="page">

            <!-- Filter theo alphabet -->
                <div class="lista">
                  <a href="https://manga168.com/a-z/?show=.">#</a>
                  <a href="https://manga168.com/a-z/?show=0-9">0-9</a>
                  <a href="https://manga168.com/a-z/?show=A">A</a>
                  <a href="https://manga168.com/a-z/?show=B">B</a>
                  <a href="https://manga168.com/a-z/?show=C">C</a>
                  <a href="https://manga168.com/a-z/?show=D">D</a>
                  <a href="https://manga168.com/a-z/?show=E">E</a>
                  <a href="https://manga168.com/a-z/?show=F">F</a>
                  <a href="https://manga168.com/a-z/?show=G">G</a>
                  <a href="https://manga168.com/a-z/?show=H">H</a>
                  <a href="https://manga168.com/a-z/?show=I">I</a>
                  <a href="https://manga168.com/a-z/?show=J">J</a>
                  <a href="https://manga168.com/a-z/?show=K">K</a>
                  <a href="https://manga168.com/a-z/?show=L">L</a>
                  <a href="https://manga168.com/a-z/?show=M">M</a>
                  <a href="https://manga168.com/a-z/?show=N">N</a>
                  <a href="https://manga168.com/a-z/?show=O">O</a>
                  <a href="https://manga168.com/a-z/?show=P">P</a>
                  <a href="https://manga168.com/a-z/?show=Q">Q</a>
                  <a href="https://manga168.com/a-z/?show=R">R</a>
                  <a href="https://manga168.com/a-z/?show=S">S</a>
                  <a href="https://manga168.com/a-z/?show=T">T</a>
                  <a href="https://manga168.com/a-z/?show=U">U</a>
                  <a href="https://manga168.com/a-z/?show=V">V</a>
                  <a href="https://manga168.com/a-z/?show=W">W</a>
                  <a href="https://manga168.com/a-z/?show=X">X</a>
                  <a href="https://manga168.com/a-z/?show=Y">Y</a>
                  <a href="https://manga168.com/a-z/?show=Z">Z</a>
                  <div class="clear"></div>
                </div>

            <!-- List sau khi filter -->
                <div class="listo">
                  <div class="bs">
                    <div class="bsx">
                      <a
                        href="https://manga168.com/manga/a-babys-nest/"
                        title="A Baby’s Nest"
                      >
                        <div class="limit">
                          <div class="ply"></div>
                          <span class="colored"
                            ><i class="fas fa-palette"></i> Color</span
                          >
                          <img
                            decoding="async"
                            src="images/a-babys-nest-rawm-193x278-1.jpg"
                            class="ts-post-image wp-post-image attachment-medium size-medium"
                            loading="lazy"
                            title="A Baby’s Nest"
                            alt="A Baby’s Nest"
                            width="193"
                            height="278"
                          />
                        </div>
                        <div class="bigor">
                          <div class="tt">A Baby’s Nest</div>
                          <div class="adds">
                            <div class="epxs">ตอนที่ 29</div>
                            <div class="rt">
                              <div class="rating">
                                <div class="rating-prc">
                                  <div class="rtp">
                                    <div class="rtb">
                                      <span style="width: 50%"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="numscore">5</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="pagination">
                  <span aria-current="page" class="page-numbers current"
                    >1</span
                  >
                  <a
                    class="page-numbers"
                    href="https://manga168.com/a-z/page/2/"
                    >2</a
                  >
                  <a
                    class="page-numbers"
                    href="https://manga168.com/a-z/page/3/"
                    >3</a
                  >
                  <span class="page-numbers dots">…</span>
                  <a
                    class="page-numbers"
                    href="https://manga168.com/a-z/page/13/"
                    >13</a
                  >
                  <a
                    class="next page-numbers"
                    href="https://manga168.com/a-z/page/2/"
                    >ถัดไป »</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Sider Bar -->
          @include('layout.rightbar')

          <script>
            $(".section .quickfilter").parent().remove();
          </script>
        </div>
      </div>

@endsection

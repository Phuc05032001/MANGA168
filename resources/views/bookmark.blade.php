@extends('layout.default')

@section('content')

     <div id="content">
        <div class="wrapper">
           <div class="postbody">
            <div class="bixbox">
              <div class="releases">
                <h1><span>BookMark</span></h1>
                <span class="hapus" id="hapus">ลบ</span>
              </div>
              <p class="ntf">
                คุณสามารถบันทึกรายเพื่ออ่านย้อนหลังได้ถึง 100เรื่อง.
                รายชื่อจะถูกเก็บไว้ในเครื่องที่คุณใช้งานอยู่เท่านั้น!!
              </p>
              <div class="listupd" id="bookmark-pool">
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
                  <div class="bs">
                    <div class="bsx">
                      <a
                        href="https://manga168.com/manga/a-buoyant-girl-confessed-to-me/"
                        title="A Buoyant Girl Confessed To Me"
                      >
                        <div class="limit">
                          <div class="ply"></div>
                          <img
                            decoding="async"
                            src="images/A-Buoyant-Girl-Confessed-To-Me-213x300.jpg"
                            class="ts-post-image wp-post-image attachment-medium size-medium"
                            loading="lazy"
                            title="A Buoyant Girl Confessed To Me"
                            alt="A Buoyant Girl Confessed To Me"
                            width="213"
                            height="300"
                          />
                        </div>
                        <div class="bigor">
                          <div class="tt">A Buoyant Girl Confessed To Me</div>
                          <div class="adds">
                            <div class="epxs">ตอนที่ 1</div>
                            <div class="rt">
                              <div class="rating">
                                <div class="rating-prc">
                                  <div class="rtp">
                                    <div class="rtb">
                                      <span style="width: 70%"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="numscore">7.00</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <!-- Sider Bar -->
          @include('layout.rightbar')

        </div>
      </div>

@endsection

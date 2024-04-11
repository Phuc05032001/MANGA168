@extends('layout.default')

@section('content')

     <div id="content">
        <div class="wrapper">
          <div class="postbody">
            <div class="bixbox seriesearch">
              <div class="releases"><h1>รายชื่อ การ์ตูน มังงะทั้งหมด</h1></div>
              <div class="mrgn">

                <!-- Filter bar -->
                <div class="advancedsearch">
                  <div class="quickfilter">
                    <form
                      action="https://manga168.com/manga"
                      class="filters"
                      method="GET"
                    >
                      <div class="filter dropdown">
                        <button
                          type="button"
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                        >
                          Genre <span id="filtercount">All</span>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu c4 genrez">
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1835"
                              name="genre[]"
                              value="1835"
                            />
                            <label for="genre-1835">Action ต่อสู้</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1886"
                              name="genre[]"
                              value="1886"
                            />
                            <label for="genre-1886">Adult ผู้ใหญ่</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1836"
                              name="genre[]"
                              value="1836"
                            />
                            <label for="genre-1836"
                              >Adventure ผจญ�&nbsp;ัย</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6713"
                              name="genre[]"
                              value="6713"
                            />
                            <label for="genre-6713">ahegao</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6817"
                              name="genre[]"
                              value="6817"
                            />
                            <label for="genre-6817">anal</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6658"
                              name="genre[]"
                              value="6658"
                            />
                            <label for="genre-6658">bbw</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4219"
                              name="genre[]"
                              value="4219"
                            />
                            <label for="genre-4219">Bender</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4416"
                              name="genre[]"
                              value="4416"
                            />
                            <label for="genre-4416">BL</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2659"
                              name="genre[]"
                              value="2659"
                            />
                            <label for="genre-2659">Blood</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6600"
                              name="genre[]"
                              value="6600"
                            />
                            <label for="genre-6600">blowjob</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4628"
                              name="genre[]"
                              value="4628"
                            />
                            <label for="genre-4628">Boys love</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6978"
                              name="genre[]"
                              value="6978"
                            />
                            <label for="genre-6978">cafe</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1853"
                              name="genre[]"
                              value="1853"
                            />
                            <label for="genre-1853">Cars</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6203"
                              name="genre[]"
                              value="6203"
                            />
                            <label for="genre-6203">College life</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4908"
                              name="genre[]"
                              value="4908"
                            />
                            <label for="genre-4908">Comed</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1847"
                              name="genre[]"
                              value="1847"
                            />
                            <label for="genre-1847">Comedy ตลก</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1893"
                              name="genre[]"
                              value="1893"
                            />
                            <label for="genre-1893">Comic</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2658"
                              name="genre[]"
                              value="2658"
                            />
                            <label for="genre-2658">Cooking</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6666"
                              name="genre[]"
                              value="6666"
                            />
                            <label for="genre-6666">cosplay</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7427"
                              name="genre[]"
                              value="7427"
                            />
                            <label for="genre-7427"
                              >Dark Fantasy ดาร์กแฟนตาซี</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1882"
                              name="genre[]"
                              value="1882"
                            />
                            <label for="genre-1882">Dementia</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2469"
                              name="genre[]"
                              value="2469"
                            />
                            <label for="genre-2469">Demon</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1873"
                              name="genre[]"
                              value="1873"
                            />
                            <label for="genre-1873">Demons</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7078"
                              name="genre[]"
                              value="7078"
                            />
                            <label for="genre-7078">doujin</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4637"
                              name="genre[]"
                              value="4637"
                            />
                            <label for="genre-4637">Doujin โดจิน</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2657"
                              name="genre[]"
                              value="2657"
                            />
                            <label for="genre-2657"
                              >Drama Seinen Slice of Life</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1841"
                              name="genre[]"
                              value="1841"
                            />
                            <label for="genre-1841">Drama ดราม่า</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2907"
                              name="genre[]"
                              value="2907"
                            />
                            <label for="genre-2907">DramMature</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1913"
                              name="genre[]"
                              value="1913"
                            />
                            <label for="genre-1913">Dystopian</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1842"
                              name="genre[]"
                              value="1842"
                            />
                            <label for="genre-1842">Ecchi ลามก</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1854"
                              name="genre[]"
                              value="1854"
                            />
                            <label for="genre-1854">Fantasy แฟนตาซี</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1879"
                              name="genre[]"
                              value="1879"
                            />
                            <label for="genre-1879">food</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6131"
                              name="genre[]"
                              value="6131"
                            />
                            <label for="genre-6131">Full Color</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2336"
                              name="genre[]"
                              value="2336"
                            />
                            <label for="genre-2336">funny</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1867"
                              name="genre[]"
                              value="1867"
                            />
                            <label for="genre-1867">Game</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4218"
                              name="genre[]"
                              value="4218"
                            />
                            <label for="genre-4218">Gender</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1869"
                              name="genre[]"
                              value="1869"
                            />
                            <label for="genre-1869">Gender Bender</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6603"
                              name="genre[]"
                              value="6603"
                            />
                            <label for="genre-6603">hairy</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1865"
                              name="genre[]"
                              value="1865"
                            />
                            <label for="genre-1865">Harem</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7432"
                              name="genre[]"
                              value="7432"
                            />
                            <label for="genre-7432">Harem ฮาเร็ม</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1887"
                              name="genre[]"
                              value="1887"
                            />
                            <label for="genre-1887">Hentai</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2139"
                              name="genre[]"
                              value="2139"
                            />
                            <label for="genre-2139">hero</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1856"
                              name="genre[]"
                              value="1856"
                            />
                            <label for="genre-1856">Historical ย้อนยุค</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1843"
                              name="genre[]"
                              value="1843"
                            />
                            <label for="genre-1843">Horror สยองขวัญ</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6669"
                              name="genre[]"
                              value="6669"
                            />
                            <label for="genre-6669">impregnation</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6670"
                              name="genre[]"
                              value="6670"
                            />
                            <label for="genre-6670">incest</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1884"
                              name="genre[]"
                              value="1884"
                            />
                            <label for="genre-1884">Isekai ต่างโลก</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1868"
                              name="genre[]"
                              value="1868"
                            />
                            <label for="genre-1868">Josei โจเซย์</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1862"
                              name="genre[]"
                              value="1862"
                            />
                            <label for="genre-1862">Kids</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2443"
                              name="genre[]"
                              value="2443"
                            />
                            <label for="genre-2443">Korean</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1969"
                              name="genre[]"
                              value="1969"
                            />
                            <label for="genre-1969">Lolicon</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2334"
                              name="genre[]"
                              value="2334"
                            />
                            <label for="genre-2334">Love &amp; Romance</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1855"
                              name="genre[]"
                              value="1855"
                            />
                            <label for="genre-1855">Magic เวทมนตร์</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7180"
                              name="genre[]"
                              value="7180"
                            />
                            <label for="genre-7180">maid</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1912"
                              name="genre[]"
                              value="1912"
                            />
                            <label for="genre-1912">Manga</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7076"
                              name="genre[]"
                              value="7076"
                            />
                            <label for="genre-7076">Manga มังงะ</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1911"
                              name="genre[]"
                              value="1911"
                            />
                            <label for="genre-1911">Manhua</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7081"
                              name="genre[]"
                              value="7081"
                            />
                            <label for="genre-7081">Manhua มังฮัว</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2963"
                              name="genre[]"
                              value="2963"
                            />
                            <label for="genre-2963">Manhwa</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6501"
                              name="genre[]"
                              value="6501"
                            />
                            <label for="genre-6501">Manhwa 18+</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7075"
                              name="genre[]"
                              value="7075"
                            />
                            <label for="genre-7075">Manhwa มังฮวา</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1848"
                              name="genre[]"
                              value="1848"
                            />
                            <label for="genre-1848"
                              >Martial Arts จอมยุทธ์</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1881"
                              name="genre[]"
                              value="1881"
                            />
                            <label for="genre-1881">match</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1837"
                              name="genre[]"
                              value="1837"
                            />
                            <label for="genre-1837">Mature ผู้ใหญ่</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1870"
                              name="genre[]"
                              value="1870"
                            />
                            <label for="genre-1870">Mecha</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2140"
                              name="genre[]"
                              value="2140"
                            />
                            <label for="genre-2140">medicine</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6659"
                              name="genre[]"
                              value="6659"
                            />
                            <label for="genre-6659">milf</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1857"
                              name="genre[]"
                              value="1857"
                            />
                            <label for="genre-1857">Military</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6132"
                              name="genre[]"
                              value="6132"
                            />
                            <label for="genre-6132">Monster Girls</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2596"
                              name="genre[]"
                              value="2596"
                            />
                            <label for="genre-2596">Monsters</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1864"
                              name="genre[]"
                              value="1864"
                            />
                            <label for="genre-1864">Music เพลง</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1859"
                              name="genre[]"
                              value="1859"
                            />
                            <label for="genre-1859">Mystery ลึกลับ</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6672"
                              name="genre[]"
                              value="6672"
                            />
                            <label for="genre-6672">nakadashi</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-5238"
                              name="genre[]"
                              value="5238"
                            />
                            <label for="genre-5238">Novel นิยาย</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4470"
                              name="genre[]"
                              value="4470"
                            />
                            <label for="genre-4470">NTR</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2323"
                              name="genre[]"
                              value="2323"
                            />
                            <label for="genre-2323">One Shot</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6246"
                              name="genre[]"
                              value="6246"
                            />
                            <label for="genre-6246">Overpowered</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1866"
                              name="genre[]"
                              value="1866"
                            />
                            <label for="genre-1866">Parody</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1860"
                              name="genre[]"
                              value="1860"
                            />
                            <label for="genre-1860">Police</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1844"
                              name="genre[]"
                              value="1844"
                            />
                            <label for="genre-1844"
                              >Psychological จิตวิทยา</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1883"
                              name="genre[]"
                              value="1883"
                            />
                            <label for="genre-1883">Ramen</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2470"
                              name="genre[]"
                              value="2470"
                            />
                            <label for="genre-2470"
                              >Reincarnation เกิดใหม่</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6247"
                              name="genre[]"
                              value="6247"
                            />
                            <label for="genre-6247">Returner</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2335"
                              name="genre[]"
                              value="2335"
                            />
                            <label for="genre-2335">revenge ล้างแค้น</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1863"
                              name="genre[]"
                              value="1863"
                            />
                            <label for="genre-1863">Romance โรแมนซ์</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1880"
                              name="genre[]"
                              value="1880"
                            />
                            <label for="genre-1880">run</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1858"
                              name="genre[]"
                              value="1858"
                            />
                            <label for="genre-1858">Samurai</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1851"
                              name="genre[]"
                              value="1851"
                            />
                            <label for="genre-1851">School</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1876"
                              name="genre[]"
                              value="1876"
                            />
                            <label for="genre-1876"
                              >School Life ชีวิตประจำวัน</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1845"
                              name="genre[]"
                              value="1845"
                            />
                            <label for="genre-1845">Sci-fi ไซ-ไฟ</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-3177"
                              name="genre[]"
                              value="3177"
                            />
                            <label for="genre-3177"
                              >Search for series of same genre</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1838"
                              name="genre[]"
                              value="1838"
                            />
                            <label for="genre-1838">Seinen เซ็นเน็น</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6202"
                              name="genre[]"
                              value="6202"
                            />
                            <label for="genre-6202">Seinen(M)</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6820"
                              name="genre[]"
                              value="6820"
                            />
                            <label for="genre-6820">sextoy</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1888"
                              name="genre[]"
                              value="1888"
                            />
                            <label for="genre-1888">Shotacon</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1885"
                              name="genre[]"
                              value="1885"
                            />
                            <label for="genre-1885">Shoujo Ai</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1872"
                              name="genre[]"
                              value="1872"
                            />
                            <label for="genre-1872">Shoujo โชโจ</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1890"
                              name="genre[]"
                              value="1890"
                            />
                            <label for="genre-1890">Shounen Ai</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1849"
                              name="genre[]"
                              value="1849"
                            />
                            <label for="genre-1849">Shounen โชเน็น</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1861"
                              name="genre[]"
                              value="1861"
                            />
                            <label for="genre-1861"
                              >Slice of Life ชีวิตประจำวัน</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6665"
                              name="genre[]"
                              value="6665"
                            />
                            <label for="genre-6665">sm</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2182"
                              name="genre[]"
                              value="2182"
                            />
                            <label for="genre-2182">Smut</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6605"
                              name="genre[]"
                              value="6605"
                            />
                            <label for="genre-6605">sole female</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7475"
                              name="genre[]"
                              value="7475"
                            />
                            <label for="genre-7475">sole male</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1877"
                              name="genre[]"
                              value="1877"
                            />
                            <label for="genre-1877">Space</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1852"
                              name="genre[]"
                              value="1852"
                            />
                            <label for="genre-1852">Sports</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7476"
                              name="genre[]"
                              value="7476"
                            />
                            <label for="genre-7476">stockings</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1846"
                              name="genre[]"
                              value="1846"
                            />
                            <label for="genre-1846">Story &amp; Art</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1850"
                              name="genre[]"
                              value="1850"
                            />
                            <label for="genre-1850">Super Power</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2703"
                              name="genre[]"
                              value="2703"
                            />
                            <label for="genre-2703">Superhero</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1839"
                              name="genre[]"
                              value="1839"
                            />
                            <label for="genre-1839"
                              >Supernatural เหนือธรรมชาติ</label
                            >
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6673"
                              name="genre[]"
                              value="6673"
                            />
                            <label for="genre-6673">sweating</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6818"
                              name="genre[]"
                              value="6818"
                            />
                            <label for="genre-6818">three some</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1871"
                              name="genre[]"
                              value="1871"
                            />
                            <label for="genre-1871">Thriller</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2598"
                              name="genre[]"
                              value="2598"
                            />
                            <label for="genre-2598">Time Travel</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1891"
                              name="genre[]"
                              value="1891"
                            />
                            <label for="genre-1891">Tragedy โศกนาฏกรรม</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6608"
                              name="genre[]"
                              value="6608"
                            />
                            <label for="genre-6608">uncensored</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1878"
                              name="genre[]"
                              value="1878"
                            />
                            <label for="genre-1878">Vampire</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-3570"
                              name="genre[]"
                              value="3570"
                            />
                            <label for="genre-3570">Video Games</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6130"
                              name="genre[]"
                              value="6130"
                            />
                            <label for="genre-6130">Web Comic</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1914"
                              name="genre[]"
                              value="1914"
                            />
                            <label for="genre-1914">Webtoons</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2597"
                              name="genre[]"
                              value="2597"
                            />
                            <label for="genre-2597">Wuxia</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7528"
                              name="genre[]"
                              value="7528"
                            />
                            <label for="genre-7528">x-ray</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1875"
                              name="genre[]"
                              value="1875"
                            />
                            <label for="genre-1875">Xuanhuan</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-2404"
                              name="genre[]"
                              value="2404"
                            />
                            <label for="genre-2404">Yaoi</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1889"
                              name="genre[]"
                              value="1889"
                            />
                            <label for="genre-1889">Yuri</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-1909"
                              name="genre[]"
                              value="1909"
                            />
                            <label for="genre-1909">Zombies</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6656"
                              name="genre[]"
                              value="6656"
                            />
                            <label for="genre-6656">ข่มขืน</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6976"
                              name="genre[]"
                              value="6976"
                            />
                            <label for="genre-6976">ครอบครัว</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6606"
                              name="genre[]"
                              value="6606"
                            />
                            <label for="genre-6606">ชุดบิกินี่</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6815"
                              name="genre[]"
                              value="6815"
                            />
                            <label for="genre-6815">นมใหญ่</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6661"
                              name="genre[]"
                              value="6661"
                            />
                            <label for="genre-6661">�&nbsp;าพสี</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7080"
                              name="genre[]"
                              value="7080"
                            />
                            <label for="genre-7080">มังงะ ntr</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7077"
                              name="genre[]"
                              value="7077"
                            />
                            <label for="genre-7077">มังงะวาย</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7074"
                              name="genre[]"
                              value="7074"
                            />
                            <label for="genre-7074">มังฮวา</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7545"
                              name="genre[]"
                              value="7545"
                            />
                            <label for="genre-7545">มังฮวา NTR</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7485"
                              name="genre[]"
                              value="7485"
                            />
                            <label for="genre-7485">มังฮวาคอมเมดี้</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7129"
                              name="genre[]"
                              value="7129"
                            />
                            <label for="genre-7129">มังฮวาดราม่า</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7130"
                              name="genre[]"
                              value="7130"
                            />
                            <label for="genre-7130">มังฮวา�&nbsp;าพสี</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7131"
                              name="genre[]"
                              value="7131"
                            />
                            <label for="genre-7131">มังฮวาฮาเร็ม</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7132"
                              name="genre[]"
                              value="7132"
                            />
                            <label for="genre-7132">มังฮวาแฟนตาซี</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7320"
                              name="genre[]"
                              value="7320"
                            />
                            <label for="genre-7320">มังฮวาแอคชั่น</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7280"
                              name="genre[]"
                              value="7280"
                            />
                            <label for="genre-7280">มังฮวาโรแมนติก</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6655"
                              name="genre[]"
                              value="6655"
                            />
                            <label for="genre-6655">รุมโทรม</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-6609"
                              name="genre[]"
                              value="6609"
                            />
                            <label for="genre-6609">เอลฟ์</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-5151"
                              name="genre[]"
                              value="5151"
                            />
                            <label for="genre-5151">โดจินต่อสู้ Action</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7079"
                              name="genre[]"
                              value="7079"
                            />
                            <label for="genre-7079">โดจินวาย</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-7133"
                              name="genre[]"
                              value="7133"
                            />
                            <label for="genre-7133">โดจินเกาหลี hmanhwa</label>
                          </li>
                          <li>
                            <input
                              class="genre-item"
                              type="checkbox"
                              id="genre-4235"
                              name="genre[]"
                              value="4235"
                            />
                            <label for="genre-4235">不朽のミザール</label>
                          </li>
                        </ul>
                      </div>
                      <div class="filter dropdown">
                        <button
                          type="button"
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                        >
                          Status <span id="filtercount">All</span>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu c1">
                          <li>
                            <input
                              type="radio"
                              id="anime_status-all"
                              name="status"
                              value=""
                            />
                            <label for="anime_status-all">All</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="anime_status-ongoing"
                              name="status"
                              value="ongoing"
                            />
                            <label for="anime_status-ongoing">Ongoing</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="anime_status-completed"
                              name="status"
                              value="completed"
                            />
                            <label for="anime_status-completed"
                              >Completed</label
                            >
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="anime_status-hiatus"
                              name="status"
                              value="hiatus"
                            />
                            <label for="anime_status-hiatus">Hiatus</label>
                          </li>
                        </ul>
                      </div>
                      <div class="filter dropdown">
                        <button
                          type="button"
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                        >
                          Type <span id="filtercount">All</span>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu c1">
                          <li>
                            <input
                              type="radio"
                              id="type-all"
                              name="type"
                              value=""
                            />
                            <label for="type-all">All</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="type-manga"
                              name="type"
                              value="manga"
                              checked=""
                            /><label for="type-manga">Manga</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="type-manhwa"
                              name="type"
                              value="manhwa"
                            /><label for="type-manhwa">Manhwa</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="type-manhua"
                              name="type"
                              value="manhua"
                            /><label for="type-manhua">Manhua</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="type-comic"
                              name="type"
                              value="comic"
                            /><label for="type-comic">Comic</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="type-novel"
                              name="type"
                              value="novel"
                            /><label for="type-novel">Novel</label>
                          </li>
                        </ul>
                      </div>
                      <div class="filter dropdown">
                        <button
                          type="button"
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                        >
                          Order by <span id="filtercount">Default</span>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu c1">
                          <li>
                            <input
                              type="radio"
                              id="sort_by-"
                              name="order"
                              value=""
                            />
                            <label for="sort_by-">Default</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="sort_by-name_a-z"
                              name="order"
                              value="title"
                            />
                            <label for="sort_by-name_a-z">A-Z</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="sort_by-name_z-a"
                              name="order"
                              value="titlereverse"
                            />
                            <label for="sort_by-name_z-a">Z-A</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="sort_by-update"
                              name="order"
                              value="update"
                            />
                            <label for="sort_by-update">Update</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="sort_by-added"
                              name="order"
                              value="latest"
                            />
                            <label for="sort_by-added">Added</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              id="sort_by-popular"
                              name="order"
                              value="popular"
                            />
                            <label for="sort_by-popular">Popular</label>
                          </li>
                        </ul>
                      </div>
                      <div class="filter submit">
                        <button type="submit" class="btn btn-custom-search">
                          <i class="fa fa-search" aria-hidden="true"></i> ค้นหา
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="clear"></div>
                  <!-- <script>
                    var ts_sf_exclusion = 0;
                  </script> -->
                </div>
                <div class="other-opts">
                  <div class="modex">
                    <a href="https://manga168.com/manga/list-mode"
                      >โหมดข้อความ</a
                    >
                  </div>
                </div>
                <div class="clear"></div>

                <!-- List các item truyện -->
                <div class="listupd">
                  <div class="bs">
                    <div class="bsx">
                      <a
                        href="/manga-detail"
                        title="“Hypnotized” Sex With My Brother"
                      >
                        <div class="limit">
                          <div class="ply"></div>
                          <img
                            src="images/Hypnotized-Sex-With-My-Brother.jpg"
                            class="ts-post-image wp-post-image attachment-medium size-medium"
                            loading="lazy"
                            title="“Hypnotized” Sex With My Brother"
                            alt="“Hypnotized” Sex With My Brother"
                            width="193"
                            height="278"
                          />
                        </div>
                        <div class="bigor">
                          <div class="tt">“Hypnotized” Sex With My Brother</div>
                          <div class="adds">
                            <div class="epxs">ตอนที่ 2</div>
                            <div class="rt">
                              <div class="rating">
                                <div class="rating-prc">
                                  <div class="rtp">
                                    <div class="rtb">
                                      <span style="width: 70%"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="numscore">7</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Panigate -->
                <div class="hpage">
                  <a
                    href="?page=2&amp;status=&amp;type=manga&amp;order="
                    class="r"
                    >หน้าถัดไป
                    <i class="fa fa-chevron-right" aria-hidden="true"></i
                  ></a>
                </div>

              </div>
            </div>
            <div class="clear"></div>
          </div>

          <!-- Sider Bar -->
          @include('layout.rightbar')

          <script>
            $(".section .quickfilter").parent().remove();
          </script>
        </div>
      </div>

@endsection

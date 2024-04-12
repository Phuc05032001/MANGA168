<div class="th">
    <div class="centernav bound">
        <!-- Thanh icon menu khi màn nhỏ -->
        <div class="shme"><i id="mini-menu-bar" class="fa fa-bars" aria-hidden="true"></i></div>


        <script>
            document.getElementById('mini-menu-bar').addEventListener('click', function() {
            document.getElementById('main-menu').classList.toggle('shwx');
        });
        </script>


        <!-- Header chứa logo -->
        <header
            role="banner"
            itemscope=""
            itemtype="http://schema.org/WPHeader">

            <div class="site-branding logox">
                <span class="logos">
                <a
                    title="Manga168 - เว็บอ่านการ์ตูนออนไลน์ Manga168 มังงะ168 อ่านมังงะฟรี manhua จีน manhwa เกาหลี manga มังฮวา แปลไทย app แอพ android ios iphone ipad อัพเดทล่าสุดให้เลือกอ่านเพียบ"
                    itemprop="url"
                    href="/"
                    ><img
                    src="{!! asset('images/168-no1.webp') !!}"
                    alt="Manga168 - เว็บอ่านการ์ตูนออนไลน์ Manga168 มังงะ168 อ่านมังงะฟรี manhua จีน manhwa เกาหลี manga มังฮวา แปลไทย app แอพ android ios iphone ipad อัพเดทล่าสุดให้เลือกอ่านเพียบ"
                    /><span class="hdl">Manga168</span></a
                >
                </span>
                <meta itemprop="name" content="Manga168" />
            </div>
        </header>

        <nav id="main-menu" class="mm">
        <span
            itemscope="itemscope"
            itemtype="http://schema.org/SiteNavigationElement"
            role="navigation"
        >

            <ul id="menu-menu" class="menu">
            <li
                id="menu-item-24"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-24"
            >
                <a
                href="/"
                aria-current="page"
                itemprop="url"
                ><span itemprop="name">หน้าแรก</span></a
                >
            </li>
            <li
                id="menu-item-53749"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-53749"
            >
                <a href="/a-z" itemprop="url"
                ><span itemprop="name">รายชื่อมังงะ</span></a
                >
            </li>
            <li
                id="menu-item-327725"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-327725"
            >
                <a
                href="/manga"
                itemprop="url"
                ><span itemprop="name">มังงะญี่ปุ่น</span></a
                >
            </li>
            <li
                id="menu-item-930"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-930"
            >
                <a
                href="/manga"
                itemprop="url"
                ><span itemprop="name">มังงะเกาหลี</span></a
                >
            </li>
            <li
                id="menu-item-931"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-931"
            >
                <a
                href="/manga"
                itemprop="url"
                ><span itemprop="name">มังงะจีน</span></a
                >
            </li>
            <li
                id="menu-item-53750"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53750"
            >
                <a href="/bookmark" itemprop="url"
                ><span itemprop="name">BookMark</span></a
                >
            </li>
            <li
                id="menu-item-143056"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143056"
            >
                <a href="/blogs" itemprop="url"
                ><span itemprop="name">ฝากลงผลงานแปล</span></a
                >
            </li>
            <li
                id="menu-item-168327"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-168327"
            >
                <a href="#" itemprop="url"
                ><span itemprop="name">โดจิน</span></a
                >
            </li>
            <li
                id="menu-item-294479"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-294479"
            >
                <a href="#" itemprop="url"
                ><span itemprop="name">มังงะวาย</span></a
                >
            </li>
            <li
                id="menu-item-355439"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-355439"
            >
                <a href="#" itemprop="url"
                ><span itemprop="name">หนังเอวี</span></a
                >
            </li>
            </ul>


        </span>
        <div class="clear"></div>
        </nav>

        <div id="i-search" class="searchx minmb">

        <form
            action="#"
            id="form"
            method="get"
            itemprop="potentialAction"
            itemscope=""
            itemtype="http://schema.org/SearchAction">

            <input
            id="s"
            itemprop="query-input"
            class="search-live"
            type="text"
            placeholder="ค้นหามังงะ"
            name="s"
            />
            <button type="submit" id="submit">
            <i class="fas fa-search" aria-hidden="true"></i>
            </button>
            <div class="srcmob srccls">
            <i id="close-search-bar" class="fas fa-times-circle"></i>
            </div>
        </form>
        </div>

        <div class="srcmob" id="icon-search" >
        <i class="fas fa-search" aria-hidden="true"></i>
        </div>

        <script>
            document.getElementById('icon-search').addEventListener('click', function() {
            document.getElementById('i-search').classList.toggle('minmbx');
        });
            document.getElementById('close-search-bar').addEventListener('click', function() {
            document.getElementById('i-search').classList.remove('minmbx');
        });
        </script>

        <div id="thememode">
        <span class="xt">Dark?</span>
        <label class="switch">
            <input type="checkbox" />
            <span class="slider round"></span>
        </label>
        </div>

        <!-- <script>
        if (localStorage.getItem("thememode") == null) {
            if (defaultTheme == "lightmode") {
            jQuery("#thememode input[type='checkbox']").prop(
                "checked",
                false
            );
            } else {
            jQuery("#thememode input[type='checkbox']").prop(
                "checked",
                true
            );
            }
        } else if (localStorage.getItem("thememode") == "lightmode") {
            jQuery("#thememode input[type='checkbox']").prop(
            "checked",
            false
            );
        } else {
            jQuery("#thememode input[type='checkbox']").prop("checked", true);
        }
        </script> -->
    </div>
    <div class="clear"></div>
</div>

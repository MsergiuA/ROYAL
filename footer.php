<div class="row footer-section">
    <div class="col-md-10 offset-1 index-text">
        <div class="row">
            <div class="col-md-12" style="text-align: center; font-size: 40px; color: orange;">
                <h2>PWD VACUUM Coating Machine & Magnetron Sputtering Coating Machine</h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <nav class="nav d-flex justify-content-between">
                            <a href="#">Royal</a>
                            <a href="#">Royal</a>
                            <a href="#">Royal</a>
                            <a href="#">Royal</a>
                        </nav>
                    </div>
                    <div class="col-md-6" style="text-align: center;">
                        <p>T 86-21-153163733076 | E <a href="#">Contact@RoyalTec.com.cn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var royal = [
            'Profile',
            'History',
            'Testimonials',
            'Events',
            'Partners'
        ],

        products = [
            'PVD Vacuum Coating Equipment',
            'PVD Vacuum Coating Service',
            'Vacuum Chambers',
            'Vacuum Pump'
        ],

        services = [
            'Pre-sale-services',
            'After-sale-services'
        ],

        application = [
            'General Application',
            'Automotive Application',
            'Electronics Application',
            'Hardware Decorative',
            'Medical Industry',
            'Forensic Fingerprint',
            'R&D'
        ];

    $('.menuItem').hover(function () {
        $('.body-of-hidden-div').empty();
        $('.extra-menu-div').css('display', 'inline');

        var linkContent = $(this).text();
        linkContent = linkContent.toLowerCase();
        switch (linkContent) {
            case "royal": {
                $(royal).each(function (i) {
                    var content = '<a class="p-2 col-xl-2 col-md-2 hidden-element-text" href="#">' + royal[i] + '<hr class="custom-line-for-menu-items"></a>';
                    $('.body-of-hidden-div').append(content);
                });
                break;
            }
            case "application": {
                $(application).each(function (i) {
                    var col = 3;
                    if (i === 6) col = 1;
                    var content = '<a class="p-2 col-xl-' + col + ' col-md-' + col + ' hidden-element-text" href="#">' + application[i] + '<hr class="custom-line-for-menu-items"></a>';
                    $('.body-of-hidden-div').append(content);
                });
                break;
            }
            case "products": {
                $(products).each(function (i) {
                    var col = 2;
                    if (i < 2) col = 3;
                    var content = '<a class="p-2 col-xl-' + col + ' col-md-' + col + ' hidden-element-text" href="#">' + products[i] + '<hr class="custom-line-for-menu-items"></a>';
                    $('.body-of-hidden-div').append(content);
                });
                break;
            }
            case "services": {
                $(services).each(function (i) {
                    var content = '<a class="p-2 col-xl-6 col-md-6 hidden-element-text" href="#">' + services[i] + '<hr class="custom-line-for-menu-items"></a>';
                    $('.body-of-hidden-div').append(content);
                });
                break;
            }
            default:
                $('.body-of-hidden-div').empty();
                $('.extra-menu-div').css('display', 'none');
        }
    });

    $('.extra-menu-div').mouseleave(function () {
        $('.body-of-hidden-div').empty();
        $('.extra-menu-div').css('display', 'none');
    });
</script>
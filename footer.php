

    <div style="background-color: #CCCCCC">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 25px; padding: 0px;">
                    <div class="col-sm-3">
                        <img class="img-responsive" src="images/logo.png" alt="" style="height: 60px;">

                    </div>
                    <div class="col-sm-3">
                        <p>&copy; সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত Nagorik Kantha | নাগরিককন্ঠ ২০১৪ -২০১৬।Developed By
                            Better Communication & Automation Ltd.</p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            প্রকাশকঃ নূপুর ঘোষ , উপদেষ্টা সম্পাদকঃ আহমেদ কামরুল মোরশেদ
                            সম্পাদকঃ সঞ্জয় কুমার ঘোষ
                            ঠিকানাঃ ৬০ পুরানা পল্টন লাইন (৫ম তলা ) , ঢাকা-১০০০
                            ফোনঃ নিউজরুম:- ০১৭০৯২৭৪১৬২ ইমেইলঃ news@nagorikkantha.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
                <div style="background-color: #8a8a8a">
                    <p class="text-center" style="padding: 5px; color: #fff;">এই ওয়েবসাইটের কোনো লেখা বা ছবি অনুমতি ছাড়া নকল করা
                        বা অন্য কোথাও প্রকাশ করা সম্পূর্ণ বেআইনি</p>
                </div>

        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
        $('#search-input').hide();
        $('#search-button').click(function () {
            $('#search-input').toggle({width: '800px'}).delay(500);
        })

    });


</script>
</body>
</html>
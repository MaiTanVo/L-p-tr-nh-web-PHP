<style>
    .scroll-icon {
        font-size: 1.5rem;
        background-color: var(--white);
        padding: 6px;
        border-radius: 40px;
        color: var(--light-green);
        transition: var(--smooth);
        position: fixed;
        z-index: 100;
        right: 12px;
        bottom: 77px;
    }
    .scroll-icon:hover {
        background-color: rgb(0, 0, 0, 0.3);
        color: var(--orange);
        transition: var(--smooth);
    }
    .icon-footer {
        padding-left: 8px;
    }
    .icon-footer:hover {
        color: var(--orange);
        transition: var(--smooth);
    }
</style>

<footer class="text-center text-lg-start bg-opacity-100 text-muted" style="margin-top: 50px;">
    <section class="footertext" style="padding-top: 5px; background-color: #2E8B57;">
        <div class="container text-center text-md-start mt-5">
            <div class="row row-cols-3mt-3">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    CHĂM SÓC KHÁCH HÀNG
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Trung tâm hỗ trợ</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Hướng dẫn mua hàng</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Chăm sóc khách hàng</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Vận chuyển</a>
                    </p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    CHÍNH SÁCH SHOP
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Điều khoản</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Chính sách bảo mật</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Tuyển Dụng</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Liên kế tiếp thị</a>
                    </p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <span>Get connected with us on social networks:</span>
                    </h6>
                    <div class="icon">
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i style="padding-left: 0px;" class="icon-footer fab fa-facebook-f"></i>
                        </a>
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i class="icon-footer fab fa-twitter"></i>
                        </a>
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i class="icon-footer fab fa-google"></i>
                        </a>
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i class="icon-footer fab fa-instagram"></i>
                        </a>
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i class="icon-footer fab fa-linkedin"></i>
                        </a>
                        <a class="footertext" href="" class="me-4 link-secondary">
                        <i class="icon-footer fab fa-github"></i>
                        </a>
                    </div>
                    <BR>
                    <p class="footertext"><i class="fas fa-phone"></i> + 01 234 567 88</p>
                    <p class="footertext"><i class="fas fa-print"></i> + 01 234 567 89</p>
                </div>
            </div>
            <div class="row row-cols-2">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    THANH TOÁN
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                    VẬN CHUYỂN
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
            </div>
        </div>
        
        <a href="#onTop" id="scroll-top" title="đầu trang">
            <i class="scroll-icon fa-solid fa-angle-up"></i>
        </a>
    </section>
    <div class="text-center p-4 footertext" style="background-color: #1a5534;">
        © 2023 Copyright:
        <a class="text-reset fw-bold footertext" href="https://mdbootstrap.com/">Kpopstore.com</a>
    </div>
</footer>

<script>
    var onTop = document.getElementById("scroll-top");
    window.onscroll = function() {
    if (document.body.onscroll > 10 || document.documentElement.scrollTop > 10) {
        onTop.style.opacity = 1;
    }
    else {
        onTop.style.opacity = 0;
    }
}
</script>
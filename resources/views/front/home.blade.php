@extends('front.layout.app')

@section('main_content')
    <div class="slider" style="background-image: url({{ asset('uploads/banner5.jpg') }})">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="text">
                            <h2>Tìm việc làm mới nhất trên toàn quốc</h2>
                            <p>
                                Tìm kiếm những công việc tốt, hoàn hảo và phù hợp nhất với kỹ năng của bạn.
                            </p>
                        </div>
                        <div class="search-section">
                            <form action="jobs.html" method="post">
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control"
                                                    placeholder="Tên công việc" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select name="" class="form-select select2">
                                                    <option value="">
                                                        Địa điểm
                                                    </option>
                                                    <option value="">
                                                        Hà Nội
                                                    </option>
                                                    <option value="">
                                                        Hồ Chí Minh
                                                    </option>
                                                    <option value="">
                                                        Đà Nẵng
                                                    </option>
                                                    <option value="">
                                                        Hải Dương
                                                    </option>
                                                    <option value="">
                                                        Hưng Yên
                                                    </option>
                                                    <option value="">
                                                        Thái Bình
                                                    </option>
                                                    <option value="">
                                                        Cần Thơ
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select name="" class="form-select select2">
                                                    <option value="">
                                                        Ngành nghề
                                                    </option>
                                                    <option value="">
                                                        Lập Trình
                                                    </option>
                                                    <option value="">
                                                        Chăm sóc khách hàng
                                                    </option>
                                                    <option value="">
                                                        Kiến trúc và xây dựng
                                                    </option>
                                                    <option value="">
                                                        Kinh doanh
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-search"></i>
                                                Tìm kiếm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Danh mục công việc</h2>
                        <p>
                            Danh sách tất cả công việc phổ biến hiện nay
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3>Kế toán</h3>
                        <p>(5 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fas fa-magic"></i></div>
                        <h3>Kĩ sư</h3>
                        <p>(3 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Y học</h3>
                        <p>(0 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h3>Sản xuất</h3>
                        <p>(5 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3>Thu thập dữ liệu</h3>
                        <p>(3 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3>Marketing</h3>
                        <p>(0 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-street-view"></i>
                        </div>
                        <h3>Kỹ thuật viên</h3>
                        <p>(5 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fas fa-lock"></i></div>
                        <h3>Security</h3>
                        <p>(3 Open Positions)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <h3>Thiết kế thời trang</h3>
                        <p>(0 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-vector-square"></i>
                        </div>
                        <h3>Viễn thông</h3>
                        <p>(5 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>Giáo dục</h3>
                        <p>(3 công việc)</p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-suitcase"></i>
                        </div>
                        <h3>Thương mại</h3>
                        <p>(0 vị trí)</p>
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="all">
                        <a href="categories.html" class="btn btn-primary">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose" style="background-image: url({{ asset('uploads/banner3.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Tại sao nên chọn Job Best</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="inner">
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="text">
                            <h2>Đăng ký nhanh</h2>
                            <p>
                                Bạn chỉ cần tạo tài khoản của mình trên trang web của chúng tôi và nộp đơn xin việc mong
                                muốn rất nhanh chóng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inner">
                        <div class="icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="text">
                            <h2>Công cụ tìm kiếm</h2>
                            <p>
                                Chúng tôi cung cấp một công cụ tìm kiếm hoàn hảo và nâng cao cho người tìm việc, nhà tuyển
                                dụng hoặc công ty.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="inner">
                        <div class="icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <div class="text">
                            <h2>Công ty tốt nhất</h2>
                            <p>
                                Các công ty tốt nhất và có uy tín trên toàn thế giới đã đăng ký tại đây và vì vậy bạn sẽ có
                                được những công việc chất lượng.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Việc làm nổi bật</h2>
                        <p>Tìm công việc phù hợp với kỹ năng của bạn</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo1.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">Software Engineer, Google</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Web Development</div>
                                <div class="location">United States</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">3 days ago</div>
                                <div class="budget">$300-$600</div>
                                <div class="expired">Expired</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Full Time</div>
                                <div class="urgent">Urgent</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark active"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo2.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">Web Designer, Amplify</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Web Development</div>
                                <div class="location">United States</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">1 day ago</div>
                                <div class="budget">$1000</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Part Time</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo3.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">Laravel Developer, Gimpo</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Web Development</div>
                                <div class="location">Canada</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">2 days ago</div>
                                <div class="budget">$1000-$3000</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Full Time</div>
                                <div class="urgent">Urgent</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo4.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">PHP Developer, Kite Solution</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Web Development</div>
                                <div class="location">Australia</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">7 hours ago</div>
                                <div class="budget">$1800</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Full Time</div>
                                <div class="urgent">Urgent</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo5.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">Junior Accountant, ABC Media</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Marketing</div>
                                <div class="location">Canada</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">2 hours ago</div>
                                <div class="budget">$400</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Part Time</div>
                                <div class="urgent">Urgent</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/logo6.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>
                                <a href="job.html">Sales Manager, Tingshu Limited</a>
                            </h3>
                            <div class="detail-1 d-flex justify-content-start">
                                <div class="category">Marketing</div>
                                <div class="location">Canada</div>
                            </div>
                            <div class="detail-2 d-flex justify-content-start">
                                <div class="date">9 hours ago</div>
                                <div class="budget">$600-$800</div>
                            </div>
                            <div class="special d-flex justify-content-start">
                                <div class="featured">Featured</div>
                                <div class="type">Full Time</div>
                                <div class="urgent">Urgent</div>
                            </div>
                            <div class="bookmark">
                                <a href=""><i class="fas fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="all">
                        <a href="jobs.html" class="btn btn-primary">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Latest News</h2>
                        <p>
                            Check our latest news from the following section
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/banner1.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <h2>
                                <a href="post.html">This is a sample blog post title</a>
                            </h2>
                            <div class="short-des">
                                <p>
                                    Lorem ipsum dolor sit amet, nibh saperet
                                    te pri, at nam diceret disputationi. Quo
                                    an consul impedit, usu possim evertitur
                                    dissentiet ei.
                                </p>
                            </div>
                            <div class="button">
                                <a href="post.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/banner2.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <h2>
                                <a href="post.html">This is a sample blog post title</a>
                            </h2>
                            <div class="short-des">
                                <p>
                                    Nec in rebum primis causae. Affert
                                    iisque ex pri, vis utinam vivendo
                                    definitionem ad, nostrum omnes que per
                                    et. Omnium antiopam.
                                </p>
                            </div>
                            <div class="button">
                                <a href="post.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/banner3.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <h2>
                                <a href="post.html">This is a sample blog post title</a>
                            </h2>
                            <div class="short-des">
                                <p>
                                    Id pri placerat voluptatum, vero dicunt
                                    dissentiunt eum et, adhuc iisque vis no.
                                    Eu suavitate conten tiones definitionem
                                    mel, ex vide.
                                </p>
                            </div>
                            <div class="button">
                                <a href="post.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

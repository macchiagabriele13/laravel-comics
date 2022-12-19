<footer id="site_footer">
    <div class="contact_us">
        <div class="my_container">
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <div class="col">
                            <h3>dc comics</h3>
                            @foreach(Config::get('db.footer.DcComics') as $link)
                            <a href="#">
                                {{ $link }}
                            </a>
                            @endforeach
                            <h3>shop</h3>
                            @foreach(Config::get('db.footer.Shop') as $link)
                            <a href="#">
                                {{ $link }}
                            </a>
                            @endforeach


                        </div>
                        <div class="col">
                            <h3>DC</h3>
                            @foreach(Config::get('db.footer.DC') as $link)
                            <a href="#">
                                {{ $link }}
                            </a>
                            @endforeach

                        </div>
                        <div class="col">
                            <h3>Sites</h3>

                            @foreach(Config::get('db.footer.DC') as $link)
                            <a href="#">
                                {{ $link }}
                            </a>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="call_to_action">
        <div class="my_container">
            <button>
                sign-up now!
            </button>
            <nav class="navbar">
                <h3>follow us</h3>
                <div>
                    @foreach(Config::get('db.footer.Icons') as $icon)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/' . $icon) }}">
                    </a>
                    @endforeach
                </div>
            </nav>
        </div>

    </div>
</footer>
<!-- /#site_footer -->
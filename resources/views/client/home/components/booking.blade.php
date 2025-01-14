<div class="booking-sec">
    <div class="container">
        <form action="mail.php" method="POST" class="booking-form ajax-contact">
            <div class="input-wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-light fa-route"></i>
                        </div>
                        <div class="search-input">
                            <label>Destination</label>
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="Select Destination" selected disabled>Select Destination</option>
                                <option value="Australia">Australia</option>
                                <option value="Dubai">Dubai</option>
                                <option value="England">England</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Saudi Arab">Saudi Arab</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Scandinavia">Scandinavia</option>
                                <option value="Western Europe">Western Europe</option>
                                <option value="Indonesia">Indonesia</option>
                                <option class="Italy">Italy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-regular fa-person-hiking"></i>
                        </div>
                        <div class="search-input">
                            <label>Type</label>
                            <select class=" nice-select" name="Adventure" id="Adventure">
                                <option value="Adventure" selected disabled>Adventure</option>
                                <option value="Beach">Beach</option>
                                <option value="Group Tour">Group Tour</option>
                                <option value="Couple Tour">Couple Tour</option>
                                <option value="Family Tour">Family Tour</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="search-input">
                            <label>Duration</label>
                            <select class="form-select nice-select" name="Duration" id="Duration">
                                <option value="Normal" selected disabled>Duration</option>
                                <option value="1">1 days</option>
                                <option value="2">2 days</option>
                                <option value="3">3 days</option>
                                <option value="4">4 days</option>
                                <option value="5">5 days</option>
                                <option value="6">6 days</option>
                                <option value="7">7 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-light fa-map-location-dot"></i>
                        </div>
                        <div class="search-input">
                            <label>Tour Category</label>
                            <select name="subject" id="category" class="form-select nice-select">
                                <option value="Normal" selected disabled>Luxury</option>
                                <option value="1">Delux</option>
                                <option value="2">Economy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-btn col-md-12 col-lg-auto">
                        <button class="th-btn"><img src="assets/img/icon/search.svg" alt="">Search</button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </form>
    </div>
</div>

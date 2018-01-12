<!-- Start Appointment Area -->
<div class="content-block-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="apointment-preview-boxed man-image-bg wow fadeInUp"></div>
            </div>
            <div class="col-md-6">
                <div class="section-title text-center">
                    <h2><span>Book A</span> Ride</h2>
                    <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. .</p>
                </div>
                <form class="appointment-form" action="index.html">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Vehicle Information</label>
                            <select name="year" id="Year">
                                <option value="hide">-- Year, Model --</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Select Product</label>
                            <select name="selectServices" id="selectServices">
                                <option value="hide">-- Select Product --</option>
                                <option value="1">Apache 200</option>
                                <option value="2">Apache 180</option>
                                <option value="3">Apache 160</option>
                                <option value="4">Apache Beast</option>
                                <option value="4">Apache 250</option>
                                <option value="4">Apache 220</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Appointment Date</label>
                            <input type="text" id="datepicker" name="appointmentDate" placeholder="Appointment Date" required>
                        </div>
                        <div class="col-md-6">
                            <label>Appointment Time</label>
                            <select name="time" id="Time">
                                <option value="hide">-- Choose --</option>
                                <option value="2010">09:00AM - 10:00AM</option>
                                <option value="2011">10:00AM - 11:00AM</option>
                                <option value="2012">11:00AM - 12:00PM</option>
                                <option value="2013">12:00PM - 01:00PM</option>
                                <option value="2014">01:00PM - 02:00PM</option>
                                <option value="2015">02:00PM - 03:00PM</option>
                                <option value="2015">03:00PM - 04:00PM</option>
                                <option value="2015">04:00PM - 05:00PM</option>
                                <option value="2015">05:00PM - 06:00PM</option>
                                <option value="2015">06:00PM - 07:00PM</option>
                                <option value="2015">07:00PM - 08:00PM</option>
                                <option value="2015">08:00PM - 09:00PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Contact Details</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="yourName" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="yourEmail" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="yourPhone" placeholder="Your Phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="yourMessage" id="yourMessage" placeholder="Your Message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn theme-btn" type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Appointment Area -->

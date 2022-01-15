<form action="#" autocomplete="off" >
            <div class="mb-left">
              <label for="form_dates" class="form-label">Dates</label>
              <div class="form-group">
                <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="Choose your dates">
              </div>
            </div>
            <div class="mb-left">
              <label for="form_guests" class="form-label">Guests</label>
              <select class="custom-select select-big ">
                <option selected="">Guests</option>
                <option value="guests_0">01 </option>
                <option value="guests_1">02 </option>
                <option value="guests_2">03 </option>
                <option value="guests_3">04 </option>
                <option value="guests_4">05 </option>
              </select>
            </div>
            <div class="mb-left">
              <label for="form_type" class="form-label">Home type</label>
              <select class="custom-select select-big ">
                <option value="type_0">Entire place </option>
                <option value="type_1">Private room </option>
                <option value="type_2">Shared room </option>
              </select>
            </div>
            <div class="mb-left">
              <label class="form-label">Price range</label>
              <div class="range-slider">
                <input type="range" value="150" min="0" max="500" range="true">
                <span class="range-value">150</span> </div>
            </div>
            <div class="mb-left">
              <label class="form-label">Host and booking</label>
              <ul class="list-inline mb-0 mt-1">
                <li class="list-inline-item">
                  <div class="custom-control custom-switch">
                    <input id="instantBook" type="checkbox" class="custom-control-input">
                    <label for="instantBook" class="custom-control-label"> <span class="text-sm">Instant book</span></label>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="custom-control custom-switch">
                    <input id="superhost" type="checkbox" class="custom-control-input">
                    <label for="superhost" class="custom-control-label"> <span class="text-sm">Superhost</span></label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="pb-left">
              <div id="moreFilters" class="collapse show">
                <div class="filter-block">
                  <h6 class="mb-3">Location</h6>
                  <div class="form-group">
                    <label for="form_neighbourhood" class="form-label">Neighbourhood</label>
                    <select class="custom-select select-big mb-3">
                      <option value="neighbourhood_0">Battery Park City </option>
                      <option value="neighbourhood_1">Bowery </option>
                      <option value="neighbourhood_2">cruisenegie Hill </option>
                      <option value="neighbourhood_3">Central Park </option>
                      <option value="neighbourhood_4">Chelsea </option>
                      <option value="neighbourhood_38">Upper Eastside </option>
                      <option value="neighbourhood_39">Upper Westside </option>
                      <option value="neighbourhood_40">Washington Heights </option>
                      <option value="neighbourhood_41">Yorkville </option>
                    </select>
                  </div>
                  <div class="form-group mb-0">
                    <label class="form-label">Neighbourhood Tag</label>
                    <ul class="list-inline mt-xl-1 mb-0">
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="type_0" name="type[]" class="custom-control-input">
                          <label for="type_0" class="custom-control-label">Hipster </label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="type_1" name="type[]" class="custom-control-input">
                          <label for="type_1" class="custom-control-label">Business </label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="type_2" name="type[]" class="custom-control-input">
                          <label for="type_2" class="custom-control-label">Family </label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="type_3" name="type[]" class="custom-control-input">
                          <label for="type_3" class="custom-control-label">Green </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block">
                  <h6 class="mb-3">Rooms and beds</h6>
                  <div class="form-group ">
                    <label class="form-label">Beds</label>
                    <div class="d-flex align-items-center"> <span class="input-number-decrement">–</span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment">+</span> </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Bedrooms</label>
                    <div class="d-flex align-items-center"> <span class="input-number-decrement">–</span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment">+</span> </div>
                  </div>
                  <div class="form-group mb-0">
                    <label class="form-label">Bathrooms</label>
                    <div class="d-flex align-items-center"> <span class="input-number-decrement">–</span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment">+</span> </div>
                  </div>
                </div>
                <div class="filter-block">
                  <h6 class="mb-3">Trip type</h6>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-switch">
                      <input id="forfamilies" type="checkbox" name="forfamilies" aria-describedby="forfamiliesHelp" class="custom-control-input">
                      <label for="forfamilies" class="custom-control-label"> <span class="text-sm">For Families</span></label>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-switch">
                      <input id="forwork" type="checkbox" name="forwork" aria-describedby="forworkHelp" class="custom-control-input">
                      <label for="forwork" class="custom-control-label"> <span class="text-sm">For work</span></label>
                    </div>
                  </div>
                </div>
                <div class="filter-block">
                  <h6 class="mb-3">Amenities</h6>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_0" name="amenities[]" class="custom-control-input">
                        <label for="amenities_0" class="custom-control-label">Kitchen </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_1" name="amenities[]" class="custom-control-input">
                        <label for="amenities_1" class="custom-control-label">Shampoo </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_2" name="amenities[]" class="custom-control-input">
                        <label for="amenities_2" class="custom-control-label">Heating </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_3" name="amenities[]" class="custom-control-input">
                        <label for="amenities_3" class="custom-control-label">Air conditioning </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_4" name="amenities[]" class="custom-control-input">
                        <label for="amenities_4" class="custom-control-label">Washer </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_5" name="amenities[]" class="custom-control-input">
                        <label for="amenities_5" class="custom-control-label">Dryer </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_6" name="amenities[]" class="custom-control-input">
                        <label for="amenities_6" class="custom-control-label">Wifi </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_7" name="amenities[]" class="custom-control-input">
                        <label for="amenities_7" class="custom-control-label">Breakfast </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_8" name="amenities[]" class="custom-control-input">
                        <label for="amenities_8" class="custom-control-label">Indoor fireplace </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_9" name="amenities[]" class="custom-control-input">
                        <label for="amenities_9" class="custom-control-label">Buzzer/wireless intercom </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_10" name="amenities[]" class="custom-control-input">
                        <label for="amenities_10" class="custom-control-label">Doorman </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_11" name="amenities[]" class="custom-control-input">
                        <label for="amenities_11" class="custom-control-label">Hangers </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_12" name="amenities[]" class="custom-control-input">
                        <label for="amenities_12" class="custom-control-label">Iron </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_13" name="amenities[]" class="custom-control-input">
                        <label for="amenities_13" class="custom-control-label">Hair dryer </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="amenities_14" name="amenities[]" class="custom-control-input">
                        <label for="amenities_14" class="custom-control-label">Laptop friendly workspace </label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="filter-block">
                  <h6 class="mb-3">Facilities</h6>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="facilities_0" name="facilities[]" class="custom-control-input">
                        <label for="facilities_0" class="custom-control-label">Free parking on premises </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="facilities_1" name="facilities[]" class="custom-control-input">
                        <label for="facilities_1" class="custom-control-label">Gym </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="facilities_2" name="facilities[]" class="custom-control-input">
                        <label for="facilities_2" class="custom-control-label">Hot tub </label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="facilities_3" name="facilities[]" class="custom-control-input">
                        <label for="facilities_3" class="custom-control-label">Pool </label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mb-left">
                <button type="submit" class="btn btn-primary btn-grad FilterBtn"> <i class="fas fa-filter mr-1"></i>Filter </button>
              </div>
            </div>
          </form>
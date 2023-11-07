<h1 class="text-center mt-lg-5 pt-lg-5 mt-sm-0 pt-sm-0 font-weight-bold">Book your Donkey now.</h1>
<h5 class="text-center">Choose from a range of categories and prices</h5>
<section class="container-fluid box col-lg-4 col-sm-10 col-xs-12 col-md-7 mx-auto mt-5 mb-5">
    <div class="text-center">
        <div class="tup1">
            <button class="btn btn-primary green btn-sm tup font-weight-bold">Donkey Travel</button><hr>
        </div>
        <h4 class="font-weight-bold">Your everyday travel partner</h4>
        <h6>Ride green Ride donkey</h6>
    </div>
    <form action="index.php" method="post">
        <div class="form-group  row feilds">
            <label class="col-sm-3" for="cabtype">Donkey Type</label>
            <select name="cabtype" class="form-control-plaintext col-sm-9 arro" id="cabtype">
                <option value="" selected disabled hidden>Drop down to select Donkey type</option>
                <option value="CedMicro">Donkey Smart</option>
                <option value="CedMini">Donkey Share</option>
                <option value="CedRoyal">Donkey Premium</option>
                <option value="CedSUV">Donkey vip</option>
            </select>
        </div>
        <p id="ec" class="bg-danger text-center">Enter Donkey type</p>
        <div class="form-group  row feilds">
            <label class="col-sm-3" for="luggage">LUGGAGE</label>
            <input type="text" name="lugg" class="form-control-plaintext col-sm-9 arrow" maxlength="2" id="lugg"
                   placeholder="Enter weight in KG">
            <p id="err" class="text-danger h6">*Luggage is only available for Donkey VIP & Premium</p>
        </div>
        <p id="nu" class="bg-danger text-center">Enter Numeric Weight Value</p>
        <p id="fare" class="green text-center"></p>
        <input type="hidden" id="far" name="fare" value="">
        <input type="hidden" id="dist" name="dist" value="">
        <div class="form-group ">
            <input type="button" class="btn green btn-primary btn-lg btn-block" id="button4" name="submit"
                   value="Calculate Fare">
        </div>
        <div class="form-group ">
            <input type="submit" class="btn green btn-primary btn-lg btn-block" id="book1" name="book"
                   value="Book Now">
        </div>
    </form>
</section>
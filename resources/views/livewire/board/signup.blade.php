<div class="container-signup">

    @livewire('component.header')
    {{-- @livewire('component.verticalnav') --}}
    <div class="label-createAccount">
    Create Your Account
    </div><br><br>
    <div class="account-info">
    Account
        <form>
            <input type="text" id="username" name="username" placeholder="Username"><br><br>
            <input type="text" id="email" name="email" placeholder="Email"><br><br>
            <input type="text" id="confirmEmail" name="confirmEmail" placeholder="Confirm Email"><br><br>
            <input type="password" id="password" name="password" placeholder="Password"><br><br>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"><br><br>
            <input type="submit" value="Submit">
        </form> 
    </div><br><br>
    <div class="country">
        Country Of Residence
        <form>
            <select id="country" name="country">
                <option value="Malaysia" selected>Malaysia</option>
                <option value="Singapore">Singapore</option>
                <option value="Philipines">Philipines</option>
                <option value="Indonesia">Indonesia</option>
            </select>
        </form>
    </div><br>
    <div class="timezone">
        Timezone - (Select city with the same time as yours)
        <form>
            <select id="timezone" name="timezone">
                <option value="Kuala Lumpur" selected>Kuala Lumpur</option>
                <option value="Singapore">Singapore</option>
                <option value="Philipines">Philipines</option>
                <option value="Indonesia">Indonesia</option>
            </select>
        </form>
    </div><br><br>
    <div class="certify-checkbox">
        By clicking "sign up" below, I certify that:
        <form>
            <input type="checkbox" id="agreeOne" name="agreeOne" value="agreeOne">
            <label for="agreeOne"> I am over 18 years old and I have read, understand and agree<br>to the terms of the User Agreement and Privacy Policy</label><br>
            <input type="checkbox" id="agreeTwo" name="agreeTwo" value="agreeTwo">
            <label for="agreeTwo"> I agree to receive electronic communications from Koinage.<br>You can unsubscribe at any time from promotional materials<br>by simply following the link included in all of our<br> marketing communications.</label><br>
        </form> 
    </div><br><br>
    <input type="submit" value="Sign Up">
    <a href="login">Already have an Account?</a>
</div>

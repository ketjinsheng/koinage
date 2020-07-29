<div class="container-2fa">

    @livewire('component.header')
    {{-- @livewire('component.verticalnav') --}}
    <div class="label-createAccount">
    Setup your 2-Factor Authentication
    </div><br><br>
    <div class="qr-code">
    <p id="qr-result">Scan this QR code</p>
        <canvas id="qr-code"></canvas>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
		<script id="qrcode">
			/* JS comes here */
			var qr;
			(function() {
                    qr = new QRious({
                    element: document.getElementById('qr-code'),
                    size: 200,
                    value: 'https://studytonight.com'
                });
            })();
            
            function generateQRCode() {
                var qrtext = document.getElementById("qr-text").value;
                document.getElementById("qr-result").innerHTML = "QR code for " + qrtext +":";
                alert(qrtext);
                qr.set({
                    foreground: 'black',
                    size: 200,
                    value: qrtext
                });
            }
		</script>
        <label for="qrcode"><i>Use your Google Authenticator app to scan this QR code and enter the one time password below</i></label>
    </div><br><br>
    <div class="manual-code">
        Manual code<br><br>
        <input type="text" id="manualcode" name="manualcode" value="T L 4 T J 6 7 D S 8 G J 5 9 7 J" disabled>
        <label for="manualcode"><i>If your have problem with scanning the QR code, enter this code manually into the app.</i></label>
    </div><br><br>
    <div class="manual-code">
        Google Authenticator Code<br><br>
        <input type="text" id="googlecode" name="googlecode"><i>Enter the  6-digit number generated by your phone</i><br><br>
    </div>
    <input type="submit" value="Continue">
</div>
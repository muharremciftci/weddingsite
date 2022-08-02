    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/jquery.matchHeight-min.js"></script>
 	 <script src="assets/js/jquery-ui.min.js"></script>	

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/jquery.maskMoney.min.js"></script>
    
    <script src="assets/js/jquery.turkLirasi.min.js"></script>
	

	 <script src="assets/js/dropzone.js"></script>
	 <script src="assets/js/dropzone-amd-module.js"></script>
	 <script src="assets/js/star-rating.js"></script>
	 <script src="assets/js/bootstrap-datepicker.min.js"></script>
	 <script src="assets/js/jquery.minicolors.min.js"></script>
	 <script src="assets/js/bootstrap-multiselect.js"></script>
	 <script src="assets/js/multiple-select.js"></script>
	 <script src="assets/js/myscript.js"></script>
	 

<script>
		Dropzone.options.imageUpload = {
			// Prevents Dropzone from uploading dropped files immediately
			autoProcessQueue: false,
			init: function () {
				this.on("addedfile", function (file) {
					// Create the remove button
					var removeButton = Dropzone.createElement("<div class='text-center'><button class='btn btn-fill btn-danger btn-xs'>Resmi Sil</button></div>");
					// Capture the Dropzone instance as closure.
					var _this = this;
					// Listen to the click event
					removeButton.addEventListener("click", function (e) {
						// Make sure the button click doesn't submit the form:
						e.preventDefault();
						e.stopPropagation();
						// Remove the file preview.
						_this.removeFile(file);
						// If you want to the delete the file on the server as well,
						// you can do the AJAX request here.
						this.on("maxfilesexceeded", function(file) { this.removeFile(file); });
					});
					// Add the button to the file preview element.
					file.previewElement.appendChild(removeButton);
					
					
					var submitButton = document.querySelector("#submit-all")
					myDropzone = this; // closure

					submitButton.addEventListener("click", function() {
					  myDropzone.processQueue(); // Tell Dropzone to process all queued files.
					});

					// You might want to show the submit button only when 
					// files are dropped here:
					this.on("addedfile", function() {
					  // Show submit button here and/or inform user to click it.
					});

				});
			}
		};
		
	$(document).ready(function() {
			$("title").html("<?=$ayarlar_bayi_firma_adi?>");

	});

</script>


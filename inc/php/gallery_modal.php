<?php
echo '<!-- insert collage modal -->

		<script>
				/* gallery modal container */
				var colg_modal = document.querySelector(".clg-modal");

				/* get image holder */
				var modal_img = document.getElementById("m-img");

				function imgModal(element) {
					colg_modal.style.display = "block";
					modal_img.src = element.src;
					modal_img.style.borderRadius = "10px";
					
				}

				var close_x = document.querySelector(".close-modal");
				function closeColgModal() {
					colg_modal.style.display = "none";
				}
        </script>'; ?>
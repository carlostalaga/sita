<div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>
          HOW DOES THIS BLOG WORKS
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<div class="">
      		<div class="filter-head">
      		</div>
      		<div class="p-5" style="background: #f3f3f3;">
      		<span class="laguna-colorada small">Filter the posts according to your level of Spanish. </br>
      		Read the post, listen to the audio and download the grammar guide.</br>
      		Do the exercises to challenge yourself ;)</span>
      		</div>
      	</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	})
</script>
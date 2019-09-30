<script>
 linkTo('Test');   


 var link = '';

$('.link a').on('click', function () {
  link = $(this).data('link');
  linkTo();
});

function linkTo(uri = '') {
  if (link == '' && uri == '') return;
  $('#content').empty();
  $('#content').load('<?php base_url() ?>index.php/' + (uri == '' ? link : uri));
}

function formatDate(date) {
  var d = new Date(date),
      month = '' + (d.getMonth() + 1),
      day = '' + d.getDate(),
      year = d.getFullYear();

  if (month.length < 2) month = '0' + month;
  if (day.length < 2) day = '0' + day;

  return [year, month, day].join('-');
}
</script>
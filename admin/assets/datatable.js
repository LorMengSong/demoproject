$(function () {
    $('#TableView').DataTable({
      pageLength: 10,
      paging: true,
      searching: true,
      order: [[0, "asc"]],
      columnDefs: [{ orderable: false, targets: [7] }] 
  });
});
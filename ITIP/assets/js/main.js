(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function (e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function (e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Initiate tooltips
   */
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })


  /**
   * Initiate Bootstrap validation check
   */
  var needsValidation = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(needsValidation)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })

  /**
   * Initiate Datatables
   */
  const datatables = select('.datatable', true)
  datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable);
  })

  /**
   * Autoresize echart charts
   */
  const mainContainer = select('#main');
  if (mainContainer) {
    setTimeout(() => {
      new ResizeObserver(function () {
        select('.echart', true).forEach(getEchart => {
          echarts.getInstanceByDom(getEchart).resize();
        })
      }).observe(mainContainer);
    }, 200);
  }

})();
$(document).ready(function () {
  //Only needed for the filename of export files.
  //Normally set in the title tag of your page.
  // DataTable initialisation

  let toggleCells = document.querySelectorAll('.accordion-toggle');

  // Loop through each toggle cell and add a click event listener
  toggleCells.forEach(function (toggleCell) {
    toggleCell.addEventListener('click', function () {
      // Find the next row with the accordion-content class
      var contentRow = toggleCell.parentNode.nextElementSibling;

      // Toggle the show class on the content row
      contentRow.classList.toggle('show');

      // Toggle the collapsed class on the toggle cell
      toggleCell.classList.toggle('collapsed');
    });
  });

  $('#example').DataTable({
    "dom": '<"dt-buttons-all"Bf><"top"l>rt<"bottom"ip>',
    "paging": true,
    autoFill: true,
    "autoWidth": true,
    columnDefs: [{
      orderable: false,
      className: 'select-checkbox',
      targets: 0
    }],
    select: {
      style: 'multi',
      selector: 'td:first-child'
    },
    order: [
      [1, 'asc']
    ],
    "lengthMenu": [5, 10, 20, 50, 100, 200, 500],
    buttons: [{
        extend: 'colvis',
        autoPrint: false,
        text: 'Xanaları Filtirlə',
        exportOptions: {
          rows: function (idx, data, node) {
            var dt = new $.fn.dataTable.Api('#example');
            var selected = dt.rows({
              selected: true
            }).indexes().toArray();

            if (selected.length === 0 || $.inArray(idx, selected) !== -1)
              return true;


            return false;
          }
        }
      },
      {
        extend: 'print',
        autoPrint: false,
        text: 'Print',
        exportOptions: {
          rows: function (idx, data, node) {
            var dt = new $.fn.dataTable.Api('#example');
            var selected = dt.rows({
              selected: true
            }).indexes().toArray();

            if (selected.length === 0 || $.inArray(idx, selected) !== -1)
              return true;


            return false;
          },
          columns: [1, 2, 3, 4, 5, 7, 8]
        }
      },
      {
        extend: 'copyHtml5',
        autoPrint: false,
        text: 'Kopyala',
        exportOptions: {
          rows: function (idx, data, node) {
            var dt = new $.fn.dataTable.Api('#example');
            var selected = dt.rows({
              selected: true
            }).indexes().toArray();

            if (selected.length === 0 || $.inArray(idx, selected) !== -1)
              return true;


            return false;
          },
          columns: [1, 2, 3, 4, 5, 7, 8]
        }
      },
      {
        extend: 'excelHtml5',
        autoPrint: false,
        text: 'Excel',
        exportOptions: {
          rows: function (idx, data, node) {
            var dt = new $.fn.dataTable.Api('#example');
            var selected = dt.rows({
              selected: true
            }).indexes().toArray();

            if (selected.length === 0 || $.inArray(idx, selected) !== -1)
              return true;


            return false;
          },
          columns: [1, 2, 3, 4, 5, 7, 8]
        }
      },
      {
        extend: 'selectAll',
        text: 'Hamısını seç',
      },
      {
        extend: 'selectNone',
        text: 'Seçimi ləğv et',
      }

    ]
  });
  // $('.dt-edit').each(function () {
  //   $(this).on('click', function (evt) {
  //     $this = $(this);
  //     var dtRow = $this.parents('tr');
  //     $('div.modal-body').innerHTML = '';
  //     $('div.modal-body').append('Row index: ' + dtRow[0].rowIndex + '<br/>');
  //     $('div.modal-body').append('Number of columns: ' + dtRow[0].cells.length + '<br/>');
  //     for (var i = 0; i < dtRow[0].cells.length; i++) {
  //       $('div.modal-body').append('Cell (column, row) ' + dtRow[0].cells[i]._DT_CellIndex.column + ', ' + dtRow[0].cells[i]._DT_CellIndex.row + ' => innerHTML : ' + dtRow[0].cells[i].innerHTML + '<br/>');
  //     }
  //     $('#myModal').modal('show');
  //   });
  // });
  //Delete buttons
  $('.dt-delete').each(function () {
    $(this).on('click', function (evt) {
      $this = $(this);
      var dtRow = $this.parents('tr');
      swal({
          title: "Əminsiniz?",
          text: "Sildiyiniz halda geri qaytarmaq imkanınız olmayacaq!",
          icon: "warning",
          buttons: true,
          buttons: ["Xeyr!", "Bəli!"],
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            var table = $('#example').DataTable();
            table.row(dtRow[0].rowIndex - 1).remove().draw(false);
            swal("Əməliyyat uğurla yerine yetirildi", {
              icon: "success",
              buttons: "Bağla",
            });
          } else {
            swal("Əməliyyat baş tutmadı", {
              buttons: "Bağla",
            });
          }
        });

    });
  });
  $('#zal_kodu').each(function () {
    $(this).on('change', function (evt) {
      $this = $(this);
      // console.log($this);
      let table_item = $('.table_box');
      table_item.empty();
      table_item.html(`
      <div class="add_row text-end">
          <a href="bina_add.html" class="btn btn-success">Əlavə et</a>
      </div>
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Seç</th>
                  <th>Kod</th>
                  <th>Binanı adı</th>
                  <th>Tutum</th>
                  <th>Zal Sayı</th>
                  <th>Rayon</th>
                  <th>Status</th>
                  <th>Kod O</th>
                  <th>Region</th>
                  <th>Əməliyyatlar</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td data-label="Seçim"></td>
                  <td data-label="Kod">1001</td>
                  <td data-label="Binanın adı">Bakı Dövlət Universiteti</td>
                  <td data-label="Tutum">1500</td>
                  <td data-label="Zal sayı">38</td>
                  <td data-label="Rayon">11</td>
                  <td data-label="Status">
                      <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="checked">
                      </div>
                  </td>
                  <td data-label="Kod O">11</td>
                  <td data-label="">1</td>
                  <td data-label="Əməliyyatlar">
                      <button type="button" class="btn btn-success btn-xs dt-edit" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@mdo"><i class="bi bi-pencil-fill "></i></button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete"><i class="bi bi-trash-fill"></i></button>
                      <button type="button" class="btn btn-primary btn-xs dt-view" data-bs-toggle="modal" data-bs-target="#viewModal" data-bs-whatever="@mdo"><i class="bi bi-eye-fill"></i></button>
                  </td>
              </tr>
              <tr>
              <td data-label="Seçim"></td>
              <td data-label="Kod">1001</td>
              <td data-label="Binanın adı">Bakı Dövlət Universiteti</td>
              <td data-label="Tutum">1500</td>
              <td data-label="Zal sayı">37</td>
              <td data-label="Rayon">11</td>
              <td data-label="Status">
                  <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="checked">
                  </div>
              </td>
              <td data-label="Kod O">11</td>
              <td data-label="">1</td>
              <td data-label="Əməliyyatlar">
                  <button type="button" class="btn btn-success btn-xs dt-edit" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@mdo"><i class="bi bi-pencil-fill "></i></button>
                  <button type="button" class="btn btn-danger btn-xs dt-delete"><i class="bi bi-trash-fill"></i></button>
                  <button type="button" class="btn btn-primary btn-xs dt-view" data-bs-toggle="modal" data-bs-target="#viewModal" data-bs-whatever="@mdo"><i class="bi bi-eye-fill"></i></button>
              </td>
          </tr>
          </tbody>
      </table>
  `).find('#example').DataTable({
        "dom": '<"dt-buttons-all"Bf><"top"l>rt<"bottom"ip>',
        "paging": true,
        autoFill: true,
        "autoWidth": true,
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0
        }],
        select: {
          style: 'multi',
          selector: 'td:first-child'
        },
        order: [
          [1, 'asc']
        ],
        "lengthMenu": [5, 10, 20, 50, 100, 200, 500],
        buttons: [{
            extend: 'colvis',
            autoPrint: false,
            text: 'Xanaları Filtirlə',
            exportOptions: {
              rows: function (idx, data, node) {
                var dt = new $.fn.dataTable.Api('#example');
                var selected = dt.rows({
                  selected: true
                }).indexes().toArray();

                if (selected.length === 0 || $.inArray(idx, selected) !== -1)
                  return true;


                return false;
              }
            }
          },
          {
            extend: 'print',
            autoPrint: false,
            text: 'Print',
            exportOptions: {
              rows: function (idx, data, node) {
                var dt = new $.fn.dataTable.Api('#example');
                var selected = dt.rows({
                  selected: true
                }).indexes().toArray();

                if (selected.length === 0 || $.inArray(idx, selected) !== -1)
                  return true;


                return false;
              },
              columns: [1, 2, 3, 4, 5, 7, 8]
            }
          },
          {
            extend: 'copyHtml5',
            autoPrint: false,
            text: 'Kopyala',
            exportOptions: {
              rows: function (idx, data, node) {
                var dt = new $.fn.dataTable.Api('#example');
                var selected = dt.rows({
                  selected: true
                }).indexes().toArray();

                if (selected.length === 0 || $.inArray(idx, selected) !== -1)
                  return true;


                return false;
              },
              columns: [1, 2, 3, 4, 5, 7, 8]
            }
          },
          {
            extend: 'excelHtml5',
            autoPrint: false,
            text: 'Excel',
            exportOptions: {
              rows: function (idx, data, node) {
                var dt = new $.fn.dataTable.Api('#example');
                var selected = dt.rows({
                  selected: true
                }).indexes().toArray();

                if (selected.length === 0 || $.inArray(idx, selected) !== -1)
                  return true;


                return false;
              },
              columns: [1, 2, 3, 4, 5, 7, 8]
            }
          },
          {
            extend: 'selectAll',
            text: 'Hamısını seç',
          },
          {
            extend: 'selectNone',
            text: 'Seçimi ləğv et',
          }

        ]
      });
    });
  });
});
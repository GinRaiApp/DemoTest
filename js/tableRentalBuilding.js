
  window.onload = function () {
    var HeadObj = [
      {
          build: "อาคาร",
          ground: "พื้นที่รวม (ตร.ม.)",
          seat: "จำนวนที่นั่ง",
          rent_ground: "ค่าเช่าพื้นที่ (บาท/ตร.ม.)",
          service: "ค่าบริการ (บาท/ตร.ม.)",
          service_add: "ค่าบริการส่วนเพิ่ม",
          furniture: "ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.)",
          service_ip: "ค่าบริการIP (บาท/ตร.ม.)",
          special_service: "ค่าบริการพิเศษ (บาท/ตร.ม.)",
          rent_gent: "ค่าเช่าGen/UPS(บาท/ตร.ม.)",
          electric: "ค่าไฟฟ้า (บาท/unit)",
          ot: "ค่าโอที (บาท/Hr)",
          water: "ค่าน้ำ (บาท/unit)",
          total: "รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน)",
          avg_rent: "AVG อัตราค่าเช่าบริการ",
          average_seat: "Average seat per sqm",
          cost_seat: "Cost per Seat"
      }
    ]

    // EXTRACT VALUE FOR HTML HEADER.
      // ('Book ID', 'Book Name', 'Category' and 'Price')
      var col = [];
      for (var i = 0; i < HeadObj.length; i++) {
          for (var key in HeadObj[i]) {
              if (col.indexOf(key) === -1) {
                  col.push(key);
              }
          }
      }

      // CREATE DYNAMIC TABLE.
      var table = document.createElement("table");

      // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

      var tr = table.insertRow(-1);                   // TABLE ROW.

      for (var i = 0; i < HeadObj.length; i++) {
        var tr = table.insertRow(-1);
        for (var j = 0; j < col.length; j++) {
          var th = document.createElement("th");      // TABLE HEADER.
          th.innerHTML = HeadObj[i][col[j]];
          tr.appendChild(th);
        }
      }

      // ADD JSON DATA TO THE TABLE AS ROWS. //row
      var myForm = document.forms.id_of_form;
      var myControls = myForm.elements['p_id[]'];
      for (var i = 0; i < myControls.length; i++) {
          var aControl = myControls[i];
      }

      for (var i = 0; i < HeadObj.length; i++) {

          tr = table.insertRow(-1);

          for (var j = 0; j < col.length; j++) {
              var tabCell = tr.insertCell(-1);
              tabCell.innerHTML = HeadObj[i][col[j]];
          }
      }

      // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
      var divContainer = document.getElementById("showData");
      divContainer.innerHTML = "";
      divContainer.appendChild(table);
    }

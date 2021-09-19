    var subjectObject = {
      "Dhaka": {
        "Bashundhora": ["Links", "Images", "Tables", "Lists"],
        "Baridhara": ["Borders", "Margins", "Backgrounds", "Float"],
        "New Market": ["Variables", "Operators", "Functions", "Conditions"]    
      },
      "Chittagong": {
        "PHP": ["Variables", "Strings", "Arrays"],
        "SQL": ["SELECT", "UPDATE", "DELETE"]
      }
    }

    window.onload = function() {
      var subjectSel = document.getElementById("area");
      var topicSel = document.getElementById("city");
      var chapterSel = document.getElementById("shoplist");
      for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
      }
      subjectSel.onchange = function() {
        chapterSel.length = 1;
        topicSel.length = 1;
        for (var y in subjectObject[this.value]) {
          topicSel.options[topicSel.options.length] = new Option(y, y);
        }
      }
      topicSel.onchange = function() {
        chapterSel.length = 1;
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
          chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
      }
    }

  
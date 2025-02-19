var $msg;
function Msg(text) {
  if (!$msg) $msg = $('#msgInput');
  $msg.val(text);
}

var __slice = Array.prototype.slice;
(function ($) {
  var Sketch;
  $.fn.sketch = function () {
    var args, key, sketch;
    key = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
    if (this.length > 1) {
      $.error('Sketch.js can only be called on one element at a time.');
    }
    sketch = this.data('sketch');
    if (typeof key === 'string' && sketch) {
      if (sketch[key]) {
        if (typeof sketch[key] === 'function') {
          return sketch[key].apply(sketch, args);
        } else if (args.length === 0) {
          return sketch[key];
        } else if (args.length === 1) {
          return sketch[key] = args[0];
        }
      } else {
        return $.error('Sketch.js did not recognize the given command.');
      }
    } else if (sketch) {
      return sketch;
    } else {
      this.data('sketch', new Sketch(this.get(0), key));
      return this;
    }
  };
  Sketch = (function () {
    function Sketch(el, opts) {
      this.el = el;
      this.canvas = $(el);
      this.context = el.getContext('2d');
      this.options = $.extend({
        toolLinks: true,
        defaultTool: 'marker',
        defaultColor: '#000000',
        defaultSize: 4
      }, opts);
      this.painting = false;
      this.color = this.options.defaultColor;
      this.size = this.options.defaultSize;
      this.tool = this.options.defaultTool;
      this.actions = [];
      this.action = [];
      this.canvas.bind('click mousedown mouseup mousemove mouseleave mouseout touchstart touchmove touchend touchcancel', this.onEvent);
      if (this.options.toolLinks) {
        $('body').delegate("a[href=\"#" + (this.canvas.attr('id')) + "\"]", 'click', function (e) {
          var $canvas, $this, key, sketch, _i, _len, _ref;
          $this = $(this);
          $canvas = $($this.attr('href'));
          sketch = $canvas.data('sketch');
          _ref = ['color', 'size', 'tool'];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            key = _ref[_i];
            if ($this.attr("data-" + key)) {
              sketch.set(key, $(this).attr("data-" + key));
            }
          }
          if ($(this).attr('data-download')) {
            sketch.download($(this).attr('data-download'));
          }
          return false;
        });
      }
    }
    Sketch.prototype.download = function (format) {
      var mime;
      format || (format = "png");
      if (format === "jpg") {
        format = "jpeg";
      }
      mime = "image/" + format;
      return window.open(this.el.toDataURL(mime));
    };
    Sketch.prototype.set = function (key, value) {
      this[key] = value;
      return this.canvas.trigger("sketch.change" + key, value);
    };
    Sketch.prototype.startPainting = function () {
      this.painting = true;
      return this.action = {
        tool: this.tool,
        color: this.color,
        size: parseFloat(this.size),
        events: []
      };
    };
    Sketch.prototype.stopPainting = function () {
      if (this.action) {
        this.actions.push(this.action);
      }
      this.painting = false;
      this.action = null;
      return this.redraw();
    };
    Sketch.prototype.onEvent = function (e) {
      if (e.originalEvent && e.originalEvent.targetTouches) {
        e.pageX = e.originalEvent.targetTouches[0].pageX;
        e.pageY = e.originalEvent.targetTouches[0].pageY;
      }
      $.sketch.tools[$(this).data('sketch').tool].onEvent.call($(this).data('sketch'), e);
      e.preventDefault();
      return false;
    };
    Sketch.prototype.redraw = function () {
      var sketch;
      this.el.width = this.canvas.width();
      this.context = this.el.getContext('2d');
      sketch = this;
      $.each(this.actions, function () {
        if (this.tool) {
          return $.sketch.tools[this.tool].draw.call(sketch, this);
        }
      });
      if (this.painting && this.action) {
        return $.sketch.tools[this.action.tool].draw.call(sketch, this.action);
      }
    };
    return Sketch;
  })();
  $.sketch = {
    tools: {}
  };
  $.sketch.tools.marker = {
    onEvent: function (e) {

      switch (e.type) {
        case 'mousedown':
        case 'touchstart':
          if (this.painting) {
            this.stopPainting();
          }
          this.startPainting();
          break;
        case 'mouseup':
        case 'mouseout':
        case 'mouseleave':
        case 'touchend':
        case 'touchcancel':

          this.stopPainting();
      }
      if (this.painting) {
        this.action.events.push({
          x: e.pageX - this.canvas.offset().left,
          y: e.pageY - this.canvas.offset().top,
          event: e.type
        });
        return this.redraw();
      }
    },
    draw: function (action) {
      var event, previous, _i, _len, _ref;
      this.context.lineJoin = "round";
      this.context.lineCap = "round";
      this.context.beginPath();
      this.context.moveTo(action.events[0].x, action.events[0].y);
      _ref = action.events;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        event = _ref[_i];
        this.context.lineTo(event.x, event.y);
        previous = event;
      }
      this.context.strokeStyle = action.color;
      this.context.lineWidth = action.size;
      return this.context.stroke();
    }
  };
  return $.sketch.tools.eraser = {
    onEvent: function (e) {
      return $.sketch.tools.marker.onEvent.call(this, e);
    },
    draw: function (action) {
      var oldcomposite;
      oldcomposite = this.context.globalCompositeOperation;
      this.context.globalCompositeOperation = "copy";
      action.color = "rgba(0,0,0,0)";
      $.sketch.tools.marker.draw.call(this, action);
      return this.context.globalCompositeOperation = oldcomposite;
    }
  };
})(jQuery);


$(document).ready(function () {
  $('#canvas1').sketch();
});

$("#confirm_request").on("click", function (e) {
  e.preventDefault();

  // if(localStorage.getItem("SAVE_MY_REQUEST") == 1)
  // {
  //   alert("Вы уже подали заявку!");
  //   return;
  // }

  var canvas = document.getElementById("canvas1");
  var dataURL = canvas.toDataURL("image/png");

  if (dataURL == "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAAAAXNSR0IArs4c6QAABGJJREFUeF7t1AEJAAAMAsHZv/RyPNwSyDncOQIECEQEFskpJgECBM5geQICBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAAYPlBwgQyAgYrExVghIgYLD8AAECGQGDlalKUAIEDJYfIEAgI2CwMlUJSoCAwfIDBAhkBAxWpipBCRAwWH6AAIGMgMHKVCUoAQIGyw8QIJARMFiZqgQlQMBg+QECBDICBitTlaAECBgsP0CAQEbAYGWqEpQAgQdWMQCX4yW9owAAAABJRU5ErkJggg==") {
    $(".w_podpis").html("Обязательное поле");
    $(".w_inp_podpis").css("border", "2px solid red");
    $(".w_podpis").show();
  } else {
    $(".w_inp_podpis").css("border", "2px solid blue");
    $(".w_podpis").hide();
  }

  var w_inp_lastname = $(".w_inp_lastname").val();
  var w_inp_firstname = $(".w_inp_firstname").val();
  var w_inp_surname = $(".w_inp_surname").val();
  var w_inp_number = $(".w_inp_number").val();
  var w_inp_date = $(".w_inp_date").val();
  var w_inp_address = $(".w_inp_address").val();
  var w_inp_identify = $(".w_inp_identify").val();
  var w_inp_comission = $(".w_inp_comission").val();
  var status = true;
  var wrapperError = false;

  if ($('#checkbox_3').is(":checked")) {
    $(".checkbox_3").css("color", '#1E2329');
  } else {
    $(".checkbox_3").css("color", 'red');
    wrapperError = $(".checkbox_3");
    status = false;
  }

  if ($('#checkbox_2').is(":checked")) {
    $(".checkbox_2").css("color", '#1E2329');
  } else {
    $(".checkbox_2").css("color", 'red');
    wrapperError = $(".checkbox_2");
    status = false;
  }

  if ($('#checkbox_4').is(":checked")) {
    $(".checkbox_4").css("color", '#1E2329');
  } else {
    $(".checkbox_4").css("color", 'red');
    status = false;
    wrapperError = $(".checkbox_4");
  }

  if ($('#checkbox_1').is(":checked")) {
    $(".checkbox_1").css("color", '#1E2329');
  } else {
    $(".checkbox_1").css("color", 'red');
    status = false;
    wrapperError = $(".checkbox_1");
  }

  if (w_inp_comission == "" || w_inp_comission.length < 1) {
    $(".w_comission").html("Обязательное поле");
    $(".w_inp_comission").css("border", "1px solid red");
    $(".w_comission").show();
    status = false;
    wrapperError = $(".w_inp_comission");
    
  } else {
    $(".w_inp_comission").css("border", "none");
    $(".w_comission").hide();
  }

  if (w_inp_identify == "" || w_inp_identify.length < 3) {
    $(".w_identify").html("Обязательное поле");
    $(".w_inp_identify").css("border", "1px solid red");
    $(".w_identify").show();
    status = false;
    wrapperError = $(".w_inp_identify");

  } else {
    $(".w_inp_identify").css("border", "none");
    $(".w_identify").hide();
  }

  if (w_inp_address == "" || w_inp_address.length < 6) {
    $(".w_address").html("Обязательное поле");
    $(".w_inp_address").css("border", "1px solid red");
    $(".w_address").show();
    status = false;
    wrapperError = $(".w_inp_address");

  } else {
    $(".w_inp_address").css("border", "none");
    $(".w_address").hide();
  }

  if (w_inp_date == "" || w_inp_date.length < 6) {
    $(".w_date").html("Обязательное поле");
    $(".w_inp_date").css("border", "1px solid red");
    $(".w_date").show();
    status = false;
    wrapperError = $(".w_inp_date");
  } else {
    $(".w_inp_date").css("border", "none");
    $(".w_date").hide();
  }

  if (w_inp_number == "" || w_inp_number.length < 6) {
    $(".w_number").html("Обязательное поле");
    $(".w_inp_number").css("border", "1px solid red");
    $(".w_number").show();
    status = false;

    wrapperError = $(".w_inp_number");
  } else {
    $(".w_inp_number").css("border", "none");
    $(".w_number").hide();
  }

  if (w_inp_surname == "" || w_inp_surname.length < 3) {
    $(".w_surname").html("Обязательное поле");
    $(".w_inp_surname").css("border", "1px solid red");
    $(".w_surname").show();
    status = false;
    wrapperError = $(".w_inp_surname");
  } else {
    $(".w_inp_surname").css("border", "none");
    $(".w_surname").hide();
  }

  if (w_inp_firstname == "" || w_inp_firstname.length < 3) {
    $(".w_firstname").html("Обязательное поле");
    $(".w_inp_firstname").css("border", "1px solid red");
    $(".w_firstname").show();
    status = false;
    wrapperError = $(".w_inp_firstname");
  } else {
    $(".w_inp_firstname").css("border", "none");
    $(".w_firstname").hide();
  }

  if (w_inp_lastname == "" || w_inp_lastname.length < 3) {
    $(".w_lastname").html("Обязательное поле");
    $(".w_inp_lastname").css("border", "1px solid red");
    $(".w_lastname").show();
    wrapperError = $(".w_inp_lastname");
    status = false;

  } else {
    $(".w_inp_lastname").css("border", "none");
    $(".w_lastname").hide();
  }


  if (status) {
    $.ajax({
      url: "ajax/request",
      type: "POST",
      data: {
        action: "SAVE_MY_REQUEST",
        photo: dataURL,
        lastname: w_inp_lastname,
        firstname: w_inp_firstname,
        surname: w_inp_surname,
        number: w_inp_number,
        date: w_inp_date,
        address: w_inp_address,
        identify: w_inp_identify,
        comission: w_inp_comission
      },
      success: function (response) {
        if (response == '1') {
          $("#btn_confirm_request").click();
          $(".w_inp_lastname").val("");
          $(".w_inp_firstname").val("");
          $(".w_inp_surname").val("");
          $(".w_inp_number").val("");
          $(".w_inp_date").val("");
          $(".w_inp_address").val("");
          $(".w_inp_identify").val("");
          $(".w_inp_comission").val("");
          // localStorage.setItem("SAVE_MY_REQUEST", "1");
        } else {
          alert("Произошла неизвестная ошибка, повторите попытку еще раз");
          //location.reload();
        }

      }
    })
  } else 
  {
    $("html, body").animate({
      scrollTop: (wrapperError.offset().top - 100)
    }, {
      duration: 370,   // по умолчанию «400»
      //easing: "linear" // по умолчанию «swing»
    });
  }

});

var dateFormatter = function () {
  if (!arguments) return;
  this.dateInputFields = arguments;
  this.isFormatted = false;

  (function ($) {
    $.fn.getCursorPosition = function () {
      var input = this.get(0);
      if (!input) return; // No (input) element found
      if (document.selection) {
        // IE
        input.focus();
      }
      return 'selectionStart' in input ? input.selectionStart : '' ||
        Math.abs(document.selection.createRange().moveStart('character', -input.value.length));
    }
  })(jQuery);

  function setEvents() {
    for (var i = 0; i < this.dateInputFields.length; i++) {
      $(this.dateInputFields[i]).keyup(function (e) {
        if (e.keyCode == 8 || e.keyCode == 46) return;
        s = e.target.value;
        var caretPos = $(e.target).getCursorPosition();
        if (caretPos == 2) s.length > 2 ? e.target.value[3] = '.' : e.target.value += '.';
        if (caretPos == 5) s.length > 5 ? e.target.value[5] = '.' : e.target.value += '.';
        if (caretPos == 10) s.length > 10 ? e.target.value[11] = '' : e.target.value += '';
        if (caretPos == 13) s.length > 13 ? e.target.value[10] = ':' : e.target.value += ':';
      });
    }
    this.isFormatted = true;
  };

  setEvents();
};


var dt = dateFormatter('#w_inp_date');


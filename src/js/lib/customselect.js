export function customSelect() {
    var x, i, j, l, ll, selElmnt, a, b, c, newElem, stepElem;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName('custom-select');
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName('select')[0];
      ll = selElmnt.length;
      /* For each element, create a new DIV that will act as the selected item: */
      a = document.createElement('DIV');
      a.setAttribute('class', 'select-selected');
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      newElem = document.createElement('DIV');
      newElem.setAttribute('class', 'select-arrow');
      newElem.innerHTML =
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17.8" id="angle_left"><path d="M7.855 17.8a1.143 1.143 0 0 1-.793-.319l-5.887-5.648a3.956 3.956 0 0 1-.017-5.611L7.045.335a1.145 1.145 0 0 1 1.62 1.619L2.778 7.841a1.666 1.666 0 0 0 0 2.356l5.87 5.632a1.145 1.145 0 0 1-.793 1.971"/></svg>';
      a.innerHTML = a.innerHTML + newElem.outerHTML;
      x[i].appendChild(a);
      /* For each element, create a new DIV that will contain the option list: */
      b = document.createElement('DIV');
      b.setAttribute('class', 'select-items select-hide');
      for (j = 1; j < ll; j++) {
        /* For each option in the original select element,
          create a new DIV that will act as an option item: */
        c = document.createElement('DIV');
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener('click', function (e) {
          /* When an item is clicked, update the original select box,
              and the selected item: */
          var y, i, k, s, h, sl, yl;
          s =
            this.parentNode.parentNode.getElementsByTagName(
              'select'
            )[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              stepElem = document.createElement('DIV');
              stepElem.setAttribute('class', 'select-arrow');
              stepElem.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.677 31.853"><path d="M0 3.22v25.412a3.214 3.214 0 0 0 5.292 2.452l13.766-11.665a4.579 4.579 0 0 0 0-6.987L5.292.768A3.214 3.214 0 0 0 0 3.22"/></svg>';
              h.innerHTML = this.innerHTML + stepElem.outerHTML;
              y = this.parentNode.getElementsByClassName(
                'same-as-selected'
              );
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute('class');
              }
              this.setAttribute('class', 'same-as-selected');
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener('click', function (e) {
        /* When the select box is clicked, close any other select boxes,
          and open/close the current select box: */
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle('select-hide');
        this.classList.toggle('select-arrow-active');
      });
    }
  
    function closeAllSelect(elmnt) {
      /* A function that will close all select boxes in the document,
        except the current select box: */
      var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
      x = document.getElementsByClassName('select-items');
      y = document.getElementsByClassName('select-selected');
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i);
        } else {
          y[i].classList.remove('select-arrow-active');
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add('select-hide');
        }
      }
    }
  
    /* If the user clicks anywhere outside the select box,
      then close all select boxes: */
    document.addEventListener('click', closeAllSelect);
  }
  
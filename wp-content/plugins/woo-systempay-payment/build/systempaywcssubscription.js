!function(Q){var B={};function F(U){if(B[U])return B[U].exports;var I=B[U]={i:U,l:!1,exports:{}};return Q[U].call(I.exports,I,I.exports,F),I.l=!0,I.exports}F.m=Q,F.c=B,F.d=function(Q,B,U){F.o(Q,B)||Object.defineProperty(Q,B,{enumerable:!0,get:U})},F.r=function(Q){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(Q,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(Q,"__esModule",{value:!0})},F.t=function(Q,B){if(1&B&&(Q=F(Q)),8&B)return Q;if(4&B&&"object"==typeof Q&&Q&&Q.__esModule)return Q;var U=Object.create(null);if(F.r(U),Object.defineProperty(U,"default",{enumerable:!0,value:Q}),2&B&&"string"!=typeof Q)for(var I in Q)F.d(U,I,function(B){return Q[B]}.bind(null,I));return U},F.n=function(Q){var B=Q&&Q.__esModule?function(){return Q.default}:function(){return Q};return F.d(B,"a",B),B},F.o=function(Q,B){return Object.prototype.hasOwnProperty.call(Q,B)},F.p="",F(F.s=4)}([function(module,exports){eval('(function() { module.exports = window["wc"]["wcBlocksRegistry"]; }());//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vZXh0ZXJuYWwgW1wid2NcIixcIndjQmxvY2tzUmVnaXN0cnlcIl0/MjUwNyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSxhQUFhLG1EQUFtRCxFQUFFIiwiZmlsZSI6IjAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKSB7IG1vZHVsZS5leHBvcnRzID0gd2luZG93W1wid2NcIl1bXCJ3Y0Jsb2Nrc1JlZ2lzdHJ5XCJdOyB9KCkpOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///0\n')},function(module,exports){eval('(function() { module.exports = window["wp"]["htmlEntities"]; }());//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vZXh0ZXJuYWwgW1wid3BcIixcImh0bWxFbnRpdGllc1wiXT85MDIyIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLGFBQWEsK0NBQStDLEVBQUUiLCJmaWxlIjoiMS5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigpIHsgbW9kdWxlLmV4cG9ydHMgPSB3aW5kb3dbXCJ3cFwiXVtcImh0bWxFbnRpdGllc1wiXTsgfSgpKTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///1\n')},function(module,__webpack_exports__,__webpack_require__){"use strict";eval('/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return getSystempayServerData; });\n/* harmony import */ var _woocommerce_settings__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(3);\n/* harmony import */ var _woocommerce_settings__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_woocommerce_settings__WEBPACK_IMPORTED_MODULE_0__);\n/**\n * Copyright © Lyra Network and contributors.\n * This file is part of Systempay plugin for WooCommerce. See COPYING.md for license details.\n *\n * @author    Lyra Network (https://www.lyra.com/)\n * @author    Geoffrey Crofte, Alsacréations (https://www.alsacreations.fr/)\n * @copyright Lyra Network and contributors\n * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL v2)\n */\n\n/**\n * External dependencies.\n */\n\n/**\n * Systempay data comes form the server passed on a global object.\n */\n\nvar getSystempayServerData = function getSystempayServerData(name) {\n  var systempayServerData = Object(_woocommerce_settings__WEBPACK_IMPORTED_MODULE_0__["getSetting"])(name + \'_data\', null);\n\n  if (!systempayServerData) {\n    return;\n  }\n\n  return systempayServerData;\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9jbGllbnQvYmxvY2tzL3N5c3RlbXBheS11dGlscy5qcz84MTc4Il0sIm5hbWVzIjpbImdldFN5c3RlbXBheVNlcnZlckRhdGEiLCJuYW1lIiwic3lzdGVtcGF5U2VydmVyRGF0YSIsImdldFNldHRpbmciXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTs7QUFFTyxJQUFNQSxzQkFBc0IsR0FBRyxTQUF6QkEsc0JBQXlCLENBQUNDLElBQUQsRUFBVTtBQUM1QyxNQUFNQyxtQkFBbUIsR0FBR0Msd0VBQVUsQ0FBRUYsSUFBSSxHQUFHLE9BQVQsRUFBa0IsSUFBbEIsQ0FBdEM7O0FBRUEsTUFBSSxDQUFFQyxtQkFBTixFQUEyQjtBQUN2QjtBQUNIOztBQUVELFNBQU9BLG1CQUFQO0FBQ0gsQ0FSTSIsImZpbGUiOiIyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBDb3B5cmlnaHQgwqkgTHlyYSBOZXR3b3JrIGFuZCBjb250cmlidXRvcnMuXG4gKiBUaGlzIGZpbGUgaXMgcGFydCBvZiBTeXN0ZW1wYXkgcGx1Z2luIGZvciBXb29Db21tZXJjZS4gU2VlIENPUFlJTkcubWQgZm9yIGxpY2Vuc2UgZGV0YWlscy5cbiAqXG4gKiBAYXV0aG9yICAgIEx5cmEgTmV0d29yayAoaHR0cHM6Ly93d3cubHlyYS5jb20vKVxuICogQGF1dGhvciAgICBHZW9mZnJleSBDcm9mdGUsIEFsc2FjcsOpYXRpb25zIChodHRwczovL3d3dy5hbHNhY3JlYXRpb25zLmZyLylcbiAqIEBjb3B5cmlnaHQgTHlyYSBOZXR3b3JrIGFuZCBjb250cmlidXRvcnNcbiAqIEBsaWNlbnNlICAgaHR0cDovL3d3dy5nbnUub3JnL2xpY2Vuc2VzL29sZC1saWNlbnNlcy9ncGwtMi4wLmh0bWwgR05VIEdlbmVyYWwgUHVibGljIExpY2Vuc2UgKEdQTCB2MilcbiAqL1xuXG4vKipcbiAqIEV4dGVybmFsIGRlcGVuZGVuY2llcy5cbiAqL1xuaW1wb3J0IHsgZ2V0U2V0dGluZyB9IGZyb20gJ0B3b29jb21tZXJjZS9zZXR0aW5ncyc7XG5cbi8qKlxuICogU3lzdGVtcGF5IGRhdGEgY29tZXMgZm9ybSB0aGUgc2VydmVyIHBhc3NlZCBvbiBhIGdsb2JhbCBvYmplY3QuXG4gKi9cblxuZXhwb3J0IGNvbnN0IGdldFN5c3RlbXBheVNlcnZlckRhdGEgPSAobmFtZSkgPT4ge1xuICAgIGNvbnN0IHN5c3RlbXBheVNlcnZlckRhdGEgPSBnZXRTZXR0aW5nKCBuYW1lICsgJ19kYXRhJywgbnVsbCApO1xuXG4gICAgaWYgKCEgc3lzdGVtcGF5U2VydmVyRGF0YSkge1xuICAgICAgICByZXR1cm47XG4gICAgfVxuXG4gICAgcmV0dXJuIHN5c3RlbXBheVNlcnZlckRhdGE7XG59O1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///2\n')},function(module,exports){eval('(function() { module.exports = window["wc"]["wcSettings"]; }());//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vZXh0ZXJuYWwgW1wid2NcIixcIndjU2V0dGluZ3NcIl0/YzFiMyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSxhQUFhLDZDQUE2QyxFQUFFIiwiZmlsZSI6IjMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKSB7IG1vZHVsZS5leHBvcnRzID0gd2luZG93W1wid2NcIl1bXCJ3Y1NldHRpbmdzXCJdOyB9KCkpOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///3\n')},function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _woocommerce_blocks_registry__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(0);\n/* harmony import */ var _woocommerce_blocks_registry__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_woocommerce_blocks_registry__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _wordpress_html_entities__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(1);\n/* harmony import */ var _wordpress_html_entities__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_html_entities__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _systempay_utils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(2);\nvar _systempay_data$suppo;\n\n/**\n * Copyright © Lyra Network and contributors.\n * This file is part of Systempay plugin for WooCommerce. See COPYING.md for license details.\n *\n * @author    Lyra Network (https://www.lyra.com/)\n * @author    Geoffrey Crofte, Alsacréations (https://www.alsacreations.fr/)\n * @copyright Lyra Network and contributors\n * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL v2)\n */\n\n/**\n * External dependencies.\n */\n\n\n/**\n * Internal dependencies.\n */\n\n\nvar PAYMENT_METHOD_NAME = 'systempaywcssubscription';\nvar systempay_data = Object(_systempay_utils__WEBPACK_IMPORTED_MODULE_2__[/* getSystempayServerData */ \"a\"])(PAYMENT_METHOD_NAME);\nvar submitButton = '.wc-block-components-checkout-place-order-button';\nvar smartbuttonMethod = '';\nvar smartbuttonAll = false;\nvar hideSmart = (systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.hide_smartbutton) && (systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.hide_smartbutton) === 'true';\nvar hideButton = false;\nvar savedData = false;\nvar newData = null;\n\nvar Content = function Content() {\n  if (systempay_data !== null && systempay_data !== void 0 && systempay_data.payment_fields) {\n    var fields = /*#__PURE__*/React.createElement(\"div\", {\n      dangerouslySetInnerHTML: {\n        __html: systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.payment_fields\n      }\n    });\n    return /*#__PURE__*/React.createElement(\"div\", null, fields);\n  } else {\n    return Object(_wordpress_html_entities__WEBPACK_IMPORTED_MODULE_1__[\"decodeEntities\"])(systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.description);\n  }\n};\n\nvar Label = function Label() {\n  var styles = {\n    divWidth: {\n      width: '95%'\n    },\n    imgFloat: {\n      \"float\": 'right'\n    }\n  };\n  return /*#__PURE__*/React.createElement(\"div\", {\n    style: styles.divWidth\n  }, /*#__PURE__*/React.createElement(\"span\", null, systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.title), /*#__PURE__*/React.createElement(\"img\", {\n    style: styles.imgFloat,\n    src: systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.logo_url,\n    alt: systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.title\n  }));\n};\n\nObject(_woocommerce_blocks_registry__WEBPACK_IMPORTED_MODULE_0__[\"registerPaymentMethod\"])({\n  name: PAYMENT_METHOD_NAME,\n  label: /*#__PURE__*/React.createElement(Label, null),\n  ariaLabel: 'Systempay payment method',\n  canMakePayment: function canMakePayment() {\n    return true;\n  },\n  content: /*#__PURE__*/React.createElement(Content, null),\n  edit: /*#__PURE__*/React.createElement(Content, null),\n  supports: {\n    features: (_systempay_data$suppo = systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.supports) !== null && _systempay_data$suppo !== void 0 ? _systempay_data$suppo : []\n  }\n});\n\nvar displayFields = function displayFields() {\n  if (systempay_data !== null && systempay_data !== void 0 && systempay_data.vars) {\n    delete window.FORM_TOKEN;\n    delete window.SYSTEMPAY_HIDE_SINGLE_BUTTON;\n    window.SYSTEMPAY_BUTTON_TEXT = jQuery(submitButton).text();\n    eval(systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.vars);\n    hideButton = window.SYSTEMPAY_HIDE_SINGLE_BUTTON == true;\n    KR.onFormReady(function () {\n      if (hideSmart) {\n        var element = jQuery(\".kr-smart-button\");\n\n        if (element.length > 0) {\n          smartbuttonMethod = element.attr(\"kr-payment-method\");\n          element.hide();\n        } else {\n          element = jQuery(\".kr-smart-form-modal-button\");\n\n          if (element.length > 0) {\n            smartbuttonMethod = \"all\";\n            element.hide();\n          }\n        }\n      }\n    });\n  }\n\n  systempayUpdatePaymentBlock(true);\n};\n\nvar onButtonClick = function onButtonClick(e) {\n  if (!jQuery(\"#radio-control-wc-payment-method-options-\" + PAYMENT_METHOD_NAME).is(\":checked\")) {\n    return true;\n  } // In case of form validation error, let WooCommerce deal with it.\n\n\n  if (jQuery('div.wc-block-components-validation-error')[0]) {\n    return true;\n  }\n\n  jQuery('.kr-form-error').html('');\n  window.SYSTEMPAY_BUTTON_TEXT = jQuery(submitButton).text();\n  document.cookie = 'systempaywcssubscription_force_redir=; Max-Age=0; path=/; domain=' + location.host;\n\n  if (typeof window.FORM_TOKEN == 'undefined') {\n    document.cookie = 'systempaywcssubscription_force_redir=\"true\"; path=/; domain=' + location.host;\n    return true;\n  }\n\n  block();\n\n  if (!hideButton && !hideSmart) {\n    validateKR(KR);\n  } else {\n    submitForm(KR);\n  }\n\n  e.preventDefault();\n};\n\nvar submitForm = function submitForm(KR) {\n  jQuery.ajaxPrefilter(function (options, originalOptions, jqXHR) {\n    newData = options.data;\n  });\n  var registerCard = jQuery('input[name=\"kr-do-register\"]').is(':checked');\n\n  if (savedData && newData === savedData) {\n    // Data in checkout page has not changed, no need to calculate token again.\n    submitKR(KR);\n  } else {\n    savedData = newData;\n    jQuery.ajax({\n      method: 'POST',\n      url: systempay_data === null || systempay_data === void 0 ? void 0 : systempay_data.token_url,\n      data: {\n        'use_identifier': 0\n      },\n      success: function success(data) {\n        var parsed = JSON.parse(data);\n        KR.setFormConfig({\n          language: window.SYSTEMPAY_LANGUAGE,\n          formToken: parsed.formToken\n        }).then(function (v) {\n          KR = v.KR;\n\n          if (registerCard) {\n            jQuery('input[name=\"kr-do-register\"]').attr('checked', 'checked');\n          }\n\n          submitKR(KR);\n        });\n      }\n    });\n  }\n};\n\nvar submitKR = function submitKR(KR) {\n  if (hideButton) {\n    var element = jQuery('.kr-smart-button');\n\n    if (element.length > 0) {\n      smartbuttonMethod = element.attr('kr-payment-method');\n    } else {\n      element = jQuery('.kr-smart-form-modal-button');\n\n      if (element.length > 0) {\n        smartbuttonAll = true;\n      }\n    }\n  }\n\n  var popin = jQuery(\".kr-smart-form-modal-button\").length > 0 || jQuery(\".kr-popin-button\").length > 0;\n\n  if (popin | smartbuttonAll) {\n    KR.openPopin();\n    unblock();\n  } else if (hideButton) {\n    KR.openSelectedPaymentMethod();\n    unblock();\n  } else if (smartbuttonMethod.length > 0) {\n    KR.openPaymentMethod(smartbuttonMethod);\n    unblock();\n  } else {\n    jQuery('#systempay_rest_processing').css('display', 'block');\n    KR.submit();\n  }\n\n  return false;\n};\n\nvar block = function block() {\n  jQuery('form.wc-block-components-form wc-block-checkout__form').block();\n  jQuery(submitButton).prop(\"disabled\", true);\n};\n\nvar unblock = function unblock() {\n  jQuery('form.wc-block-components-form wc-block-checkout__form').unblock();\n  jQuery(submitButton).prop(\"disabled\", false);\n  jQuery('.wc-block-components-button__text').text(\"\").text(window.SYSTEMPAY_BUTTON_TEXT);\n  return false;\n};\n\nvar validateKR = function validateKR(KR) {\n  KR.validateForm().then(function (v) {\n    submitForm(v.KR);\n  })[\"catch\"](function (v) {\n    // Display error message.\n    var result = v.result;\n    result.doOnError();\n  });\n};\n\nvar first = true;\n\nvar initFields = function initFields() {\n  if (!first) {\n    displayFields();\n    jQuery(submitButton).on('click', onButtonClick);\n    jQuery('input[type=radio][name=radio-control-wc-payment-method-options]').change(function (e) {\n      if (this.value === PAYMENT_METHOD_NAME) {\n        displayFields();\n      }\n    });\n  }\n\n  first = false;\n};\n\njQuery(document).on('ready', initFields);\njQuery(window).on('load', initFields);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9jbGllbnQvYmxvY2tzL3N5c3RlbXBheXdjc3N1YnNjcmlwdGlvbi5qcz9lNTY0Il0sIm5hbWVzIjpbIlBBWU1FTlRfTUVUSE9EX05BTUUiLCJzeXN0ZW1wYXlfZGF0YSIsImdldFN5c3RlbXBheVNlcnZlckRhdGEiLCJzdWJtaXRCdXR0b24iLCJzbWFydGJ1dHRvbk1ldGhvZCIsInNtYXJ0YnV0dG9uQWxsIiwiaGlkZVNtYXJ0IiwiaGlkZV9zbWFydGJ1dHRvbiIsImhpZGVCdXR0b24iLCJzYXZlZERhdGEiLCJuZXdEYXRhIiwiQ29udGVudCIsInBheW1lbnRfZmllbGRzIiwiZmllbGRzIiwiX19odG1sIiwiZGVjb2RlRW50aXRpZXMiLCJkZXNjcmlwdGlvbiIsIkxhYmVsIiwic3R5bGVzIiwiZGl2V2lkdGgiLCJ3aWR0aCIsImltZ0Zsb2F0IiwidGl0bGUiLCJsb2dvX3VybCIsInJlZ2lzdGVyUGF5bWVudE1ldGhvZCIsIm5hbWUiLCJsYWJlbCIsImFyaWFMYWJlbCIsImNhbk1ha2VQYXltZW50IiwiY29udGVudCIsImVkaXQiLCJzdXBwb3J0cyIsImZlYXR1cmVzIiwiZGlzcGxheUZpZWxkcyIsInZhcnMiLCJ3aW5kb3ciLCJGT1JNX1RPS0VOIiwiU1lTVEVNUEFZX0hJREVfU0lOR0xFX0JVVFRPTiIsIlNZU1RFTVBBWV9CVVRUT05fVEVYVCIsImpRdWVyeSIsInRleHQiLCJldmFsIiwiS1IiLCJvbkZvcm1SZWFkeSIsImVsZW1lbnQiLCJsZW5ndGgiLCJhdHRyIiwiaGlkZSIsInN5c3RlbXBheVVwZGF0ZVBheW1lbnRCbG9jayIsIm9uQnV0dG9uQ2xpY2siLCJlIiwiaXMiLCJodG1sIiwiZG9jdW1lbnQiLCJjb29raWUiLCJsb2NhdGlvbiIsImhvc3QiLCJibG9jayIsInZhbGlkYXRlS1IiLCJzdWJtaXRGb3JtIiwicHJldmVudERlZmF1bHQiLCJhamF4UHJlZmlsdGVyIiwib3B0aW9ucyIsIm9yaWdpbmFsT3B0aW9ucyIsImpxWEhSIiwiZGF0YSIsInJlZ2lzdGVyQ2FyZCIsInN1Ym1pdEtSIiwiYWpheCIsIm1ldGhvZCIsInVybCIsInRva2VuX3VybCIsInN1Y2Nlc3MiLCJwYXJzZWQiLCJKU09OIiwicGFyc2UiLCJzZXRGb3JtQ29uZmlnIiwibGFuZ3VhZ2UiLCJTWVNURU1QQVlfTEFOR1VBR0UiLCJmb3JtVG9rZW4iLCJ0aGVuIiwidiIsInBvcGluIiwib3BlblBvcGluIiwidW5ibG9jayIsIm9wZW5TZWxlY3RlZFBheW1lbnRNZXRob2QiLCJvcGVuUGF5bWVudE1ldGhvZCIsImNzcyIsInN1Ym1pdCIsInByb3AiLCJ2YWxpZGF0ZUZvcm0iLCJyZXN1bHQiLCJkb09uRXJyb3IiLCJmaXJzdCIsImluaXRGaWVsZHMiLCJvbiIsImNoYW5nZSIsInZhbHVlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBOztBQUNBO0FBRUEsSUFBTUEsbUJBQW1CLEdBQUcsMEJBQTVCO0FBQ0EsSUFBSUMsY0FBYyxHQUFHQyx1RkFBc0IsQ0FBQ0YsbUJBQUQsQ0FBM0M7QUFFQSxJQUFJRyxZQUFZLEdBQUcsa0RBQW5CO0FBQ0EsSUFBSUMsaUJBQWlCLEdBQUcsRUFBeEI7QUFDQSxJQUFJQyxjQUFjLEdBQUcsS0FBckI7QUFDQSxJQUFJQyxTQUFTLEdBQUcsQ0FBQUwsY0FBYyxTQUFkLElBQUFBLGNBQWMsV0FBZCxZQUFBQSxjQUFjLENBQUVNLGdCQUFoQixLQUFxQyxDQUFBTixjQUFjLFNBQWQsSUFBQUEsY0FBYyxXQUFkLFlBQUFBLGNBQWMsQ0FBRU0sZ0JBQWhCLE1BQXFDLE1BQTFGO0FBQ0EsSUFBSUMsVUFBVSxHQUFHLEtBQWpCO0FBRUEsSUFBSUMsU0FBUyxHQUFHLEtBQWhCO0FBQ0EsSUFBSUMsT0FBTyxHQUFHLElBQWQ7O0FBRUEsSUFBTUMsT0FBTyxHQUFHLFNBQVZBLE9BQVUsR0FBTTtB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Q0FiRDs7QUFlQXRELE1BQU0sQ0FBQ2MsUUFBRCxDQUFOLENBQWlCMEMsRUFBakIsQ0FBb0IsT0FBcEIsRUFBNkJELFVBQTdCO0FBQ0F2RCxNQUFNLENBQUNKLE1BQUQsQ0FBTixDQUFlNEQsRUFBZixDQUFrQixNQUFsQixFQUEwQkQsVUFBMUIiLCJmaWxlIjoiNC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKlxuICogQ29weXJpZ2h0IMKpIEx5cmEgTmV0d29yayBhbmQgY29udHJpYnV0b3JzLlxuICogVGhpcyBmaWxlIGlzIHBhcnQgb2YgU3lzdGVtcGF5IHBsdWdpbiBmb3IgV29vQ29tbWVyY2UuIFNlZSBDT1BZSU5HLm1kIGZvciBsaWNlbnNlIGRldGFpbHMuXG4gKlxuICogQGF1dGhvciAgICBMeXJhIE5ldHdvcmsgKGh0dHBzOi8vd3d3Lmx5cmEuY29tLylcbiAqIEBhdXRob3IgICAgR2VvZmZyZXkgQ3JvZnRlLCBBbHNhY3LDqWF0aW9ucyAoaHR0cHM6Ly93d3cuYWxzYWNyZWF0aW9ucy5mci8pXG4gKiBAY29weXJpZ2h0IEx5cmEgTmV0d29yayBhbmQgY29udHJpYnV0b3JzXG4gKiBAbGljZW5zZSAgIGh0dHA6Ly93d3cuZ251Lm9yZy9saWNlbnNlcy9vbGQtbGljZW5zZXMvZ3BsLTIuMC5odG1sIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlIChHUEwgdjIpXG4gKi9cblxuLyoqXG4gKiBFeHRlcm5hbCBkZXBlbmRlbmNpZXMuXG4gKi9cbmltcG9ydCB7IHJlZ2lzdGVyUGF5bWVudE1ldGhvZCB9IGZyb20gJ0B3b29jb21tZXJjZS9ibG9ja3MtcmVnaXN0cnknO1xuaW1wb3J0IHsgZGVjb2RlRW50aXRpZXMgfSBmcm9tICdAd29yZHByZXNzL2h0bWwtZW50aXRpZXMnO1xuXG4vKipcbiAqIEludGVybmFsIGRlcGVuZGVuY2llcy5cbiAqL1xuaW1wb3J0IHsgZ2V0U3lzdGVtcGF5U2VydmVyRGF0YSB9IGZyb20gJy4vc3lzdGVtcGF5LXV0aWxzJztcblxuY29uc3QgUEFZTUVOVF9NRVRIT0RfTkFNRSA9ICdzeXN0ZW1wYXl3Y3NzdWJzY3JpcHRpb24nO1xudmFyIHN5c3RlbXBheV9kYXRhID0gZ2V0U3lzdGVtcGF5U2VydmVyRGF0YShQQVlNRU5UX01FVEhPRF9OQU1FKTtcblxudmFyIHN1Ym1pdEJ1dHRvbiA9ICcud2MtYmxvY2stY29tcG9uZW50cy1jaGVja291dC1wbGFjZS1vcmRlci1idXR0b24nO1xudmFyIHNtYXJ0YnV0dG9uTWV0aG9kID0gJyc7XG52YXIgc21hcnRidXR0b25BbGwgPSBmYWxzZTtcbnZhciBoaWRlU21hcnQgPSBzeXN0ZW1wYXlfZGF0YT8uaGlkZV9zbWFydGJ1dHRvbiAmJiAoc3lzdGVtcGF5X2RhdGE/LmhpZGVfc21hcnRidXR0b24gPT09ICd0cnVlJyk7XG52YXIgaGlkZUJ1dHRvbiA9IGZhbHNlO1xuXG52YXIgc2F2ZWREYXRhID0gZmFsc2U7XG52YXIgbmV3RGF0YSA9IG51bGw7XG5cbmNvbnN0IENvbnRlbnQgPSAoKSA9PiB7XG4gICAgaWYgKHN5c3RlbXBheV9kYXRhPy5wYXltZW50X2ZpZWxkcykge1xuICAgICAgICB2YXIgZmllbGRzID0gPGRpdiBkYW5nZXJvdXNseVNldElubmVySFRNTD17eyBfX2h0bWw6IHN5c3RlbXBheV9kYXRhPy5wYXltZW50X2ZpZWxkcyB9fSAvPjtcblxuICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgPGRpdj5cbiAgICAgICAgICAgICAgICB7IGZpZWxkcyB9XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICByZXR1cm4gZGVjb2RlRW50aXRpZXMoc3lzdGVtcGF5X2RhdGE/LmRlc2NyaXB0aW9uKTtcbiAgICB9XG59O1xuXG52YXIgTGFiZWwgPSAoKSA9PiB7XG4gICAgY29uc3Qgc3R5bGVzID0ge1xuICAgICAgICBkaXZXaWR0aDoge1xuICAgICAgICAgICAgd2lkdGg6ICc5NSUnXG4gICAgICAgIH0sXG4gICAgICAgIGltZ0Zsb2F0OiB7XG4gICAgICAgICAgICBmbG9hdDogJ3JpZ2h0J1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcmV0dXJuIChcbiAgICAgICAgPGRpdiBzdHlsZT17IHN0eWxlcy5kaXZXaWR0aCB9PlxuICAgICAgICAgICAgPHNwYW4+eyBzeXN0ZW1wYXlfZGF0YT8udGl0bGUgfTwvc3Bhbj5cbiAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICBzdHlsZT17IHN0eWxlcy5pbWdGbG9hdCB9XG4gICAgICAgICAgICAgICAgc3JjPXsgc3lzdGVtcGF5X2RhdGE/LmxvZ29fdXJsIH1cbiAgICAgICAgICAgICAgICBhbHQ9eyBzeXN0ZW1wYXlfZGF0YT8udGl0bGUgfVxuICAgICAgICAgICAgLz5cbiAgICAgICAgPC9kaXY+XG4gICAgKTtcbn07XG5cbnJlZ2lzdGVyUGF5bWVudE1ldGhvZCh7XG4gICAgbmFtZTogUEFZTUVOVF9NRVRIT0RfTkFNRSxcbiAgICBsYWJlbDogPExhYmVsIC8+LFxuICAgIGFyaWFMYWJlbDogJ1N5c3RlbXBheSBwYXltZW50IG1ldGhvZCcsXG4gICAgY2FuTWFrZVBheW1lbnQ6ICgpID0+IHRydWUsXG4gICAgY29udGVudDogPENvbnRlbnQgLz4sXG4gICAgZWRpdDogPENvbnRlbnQgLz4sXG4gICAgc3VwcG9ydHM6IHtcbiAgICAgICAgZmVhdHVyZXM6IHN5c3RlbXBheV9kYXRhPy5zdXBwb3J0cyA/PyBbXSxcbiAgICB9LFxufSk7XG5cbnZhciBkaXNwbGF5RmllbGRzID0gZnVuY3Rpb24gKCkge1xuICAgIGlmIChzeXN0ZW1wYXlfZGF0YT8udmFycykge1xuICAgICAgICBkZWxldGUod2luZG93LkZPUk1fVE9LRU4pO1xuICAgICAgICBkZWxldGUod2luZG93LlNZU1RFTVBBWV9ISURFX1NJTkdMRV9CVVRUT04pO1xuXG4gICAgICAgIHdpbmRvdy5TWVNURU1QQVlfQlVUVE9OX1RFWFQgPSBqUXVlcnkoc3VibWl0QnV0dG9uKS50ZXh0KCk7XG4gICAgICAgIGV2YWwoc3lzdGVtcGF5X2RhdGE/LnZhcnMpO1xuXG4gICAgICAgIGhpZGVCdXR0b24gPSAod2luZG93LlNZU1RFTVBBWV9ISURFX1NJTkdMRV9CVVRUT04gPT0gdHJ1ZSk7XG5cbiAgICAgICAgS1Iub25Gb3JtUmVhZHkoKCkgPT4ge1xuICAgICAgICAgICAgaWYgKGhpZGVTbWFydCkge1xuICAgICAgICAgICAgICAgIGxldCBlbGVtZW50ID0galF1ZXJ5KFwiLmtyLXNtYXJ0LWJ1dHRvblwiKTtcbiAgICAgICAgICAgICAgICBpZiAoZWxlbWVudC5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgIHNtYXJ0YnV0dG9uTWV0aG9kID0gZWxlbWVudC5hdHRyKFwia3ItcGF5bWVudC1tZXRob2RcIik7XG4gICAgICAgICAgICAgICAgICAgIGVsZW1lbnQuaGlkZSgpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIGVsZW1lbnQgPSBqUXVlcnkoXCIua3Itc21hcnQtZm9ybS1tb2RhbC1idXR0b25cIik7XG4gICAgICAgICAgICAgICAgICAgIGlmIChlbGVtZW50Lmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNtYXJ0YnV0dG9uTWV0aG9kID0gXCJhbGxcIjtcbiAgICAgICAgICAgICAgICAgICAgICAgIGVsZW1lbnQuaGlkZSgpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBzeXN0ZW1wYXlVcGRhdGVQYXltZW50QmxvY2sodHJ1ZSk7XG59O1xuXG52YXIgb25CdXR0b25DbGljayA9IGZ1bmN0aW9uIChlKSB7XG4gICAgaWYgKCEgalF1ZXJ5KFwiI3JhZGlvLWNvbnRyb2wtd2MtcGF5bWVudC1tZXRob2Qtb3B0aW9ucy1cIiArIFBBWU1FTlRfTUVUSE9EX05BTUUpLmlzKFwiOmNoZWNrZWRcIikpIHtcbiAgICAgICAgcmV0dXJuIHRydWU7XG4gICAgfVxuXG4gICAgLy8gSW4gY2FzZSBvZiBmb3JtIHZhbGlkYXRpb24gZXJyb3IsIGxldCBXb29Db21tZXJjZSBkZWFsIHdpdGggaXQuXG4gICAgaWYgKGpRdWVyeSgnZGl2LndjLWJsb2NrLWNvbXBvbmVudHMtdmFsaWRhdGlvbi1lcnJvcicpWzBdKSB7XG4gICAgICAgIHJldHVybiB0cnVlO1xuICAgIH1cblxuICAgIGpRdWVyeSgnLmtyLWZvcm0tZXJyb3InKS5odG1sKCcnKTtcbiAgICB3aW5kb3cuU1lTVEVNUEFZX0JVVFRPTl9URVhUID0galF1ZXJ5KHN1Ym1pdEJ1dHRvbikudGV4dCgpO1xuXG4gICAgZG9jdW1lbnQuY29va2llID0gJ3N5c3RlbXBheXdjc3N1YnNjcmlwdGlvbl9mb3JjZV9yZWRpcj07IE1heC1BZ2U9MDsgcGF0aD0vOyBkb21haW49JyArIGxvY2F0aW9uLmhvc3Q7XG4gICAgaWYgKHR5cGVvZiB3aW5kb3cuRk9STV9UT0tFTiA9PSAndW5kZWZpbmVkJykge1xuICAgICAgICBkb2N1bWVudC5jb29raWUgPSAnc3lzdGVtcGF5d2Nzc3Vic2NyaXB0aW9uX2ZvcmNlX3JlZGlyPVwidHJ1ZVwiOyBwYXRoPS87IGRvbWFpbj0nICsgbG9jYXRpb24uaG9zdDtcbiAgICAgICAgcmV0dXJuIHRydWU7XG4gICAgfVxuXG4gICAgYmxvY2soKTtcblxuICAgIGlmICghIGhpZGVCdXR0b24gJiYgISBoaWRlU21hcnQpIHtcbiAgICAgICAgdmFsaWRhdGVLUihLUik7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgc3VibWl0Rm9ybShLUik7XG4gICAgfVxuXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xufTtcblxudmFyIHN1Ym1pdEZvcm0gPSBmdW5jdGlvbiAoS1IpIHtcbiAgICBqUXVlcnkuYWpheFByZWZpbHRlcihmdW5jdGlvbihvcHRpb25zLCBvcmlnaW5hbE9wdGlvbnMsIGpxWEhSKSB7XG4gICAgICAgIG5ld0RhdGEgPSBvcHRpb25zLmRhdGE7XG4gICAgfSk7XG5cbiAgICB2YXIgcmVnaXN0ZXJDYXJkID0galF1ZXJ5KCdpbnB1dFtuYW1lPVwia3ItZG8tcmVnaXN0ZXJcIl0nKS5pcygnOmNoZWNrZWQnKTtcblxuICAgIGlmIChzYXZlZERhdGEgJiYgKG5ld0RhdGEgPT09IHNhdmVkRGF0YSkpIHtcbiAgICAgICAgLy8gRGF0YSBpbiBjaGVja291dCBwYWdlIGhhcyBub3QgY2hhbmdlZCwgbm8gbmVlZCB0byBjYWxjdWxhdGUgdG9rZW4gYWdhaW4uXG4gICAgICAgIHN1Ym1pdEtSKEtSKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBzYXZlZERhdGEgPSBuZXdEYXRhO1xuICAgICAgICBqUXVlcnkuYWpheCh7XG4gICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgIHVybDogc3lzdGVtcGF5X2RhdGE/LnRva2VuX3VybCxcbiAgICAgICAgICAgIGRhdGE6IHsgJ3VzZV9pZGVudGlmaWVyJzogMCB9LFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgIHZhciBwYXJzZWQgPSBKU09OLnBhcnNlKGRhdGEpO1xuICAgICAgICAgICAgICAgIEtSLnNldEZvcm1Db25maWcoe1xuICAgICAgICAgICAgICAgICAgICBsYW5ndWFnZTogd2luZG93LlNZU1RFTVBBWV9MQU5HVUFHRSxcbiAgICAgICAgICAgICAgICAgICAgZm9ybVRva2VuOiBwYXJzZWQuZm9ybVRva2VuXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbih2KSB7XG4gICAgICAgICAgICAgICAgICAgIEtSID0gdi5LUjtcbiAgICAgICAgICAgICAgICAgICAgaWYgKHJlZ2lzdGVyQ2FyZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCdpbnB1dFtuYW1lPVwia3ItZG8tcmVnaXN0ZXJcIl0nKS5hdHRyKCdjaGVja2VkJywnY2hlY2tlZCcpO1xuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgc3VibWl0S1IoS1IpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG59O1xuXG52YXIgc3VibWl0S1IgPSBmdW5jdGlvbiAoS1IpIHtcbiAgICBpZiAoaGlkZUJ1dHRvbikge1xuICAgICAgICBsZXQgZWxlbWVudCA9IGpRdWVyeSgnLmtyLXNtYXJ0LWJ1dHRvbicpO1xuXG4gICAgICAgIGlmIChlbGVtZW50Lmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgIHNtYXJ0YnV0dG9uTWV0aG9kID0gZWxlbWVudC5hdHRyKCdrci1wYXltZW50LW1ldGhvZCcpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgZWxlbWVudCA9IGpRdWVyeSgnLmtyLXNtYXJ0LWZvcm0tbW9kYWwtYnV0dG9uJyk7XG5cbiAgICAgICAgICAgIGlmIChlbGVtZW50Lmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgICAgICBzbWFydGJ1dHRvbkFsbCA9IHRydWU7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICB2YXIgcG9waW4gPSAoalF1ZXJ5KFwiLmtyLXNtYXJ0LWZvcm0tbW9kYWwtYnV0dG9uXCIpLmxlbmd0aCA+IDApIHx8IChqUXVlcnkoXCIua3ItcG9waW4tYnV0dG9uXCIpLmxlbmd0aCA+IDApO1xuXG4gICAgaWYgKHBvcGluIHwgc21hcnRidXR0b25BbGwpIHtcbiAgICAgICAgS1Iub3BlblBvcGluKCk7XG4gICAgICAgIHVuYmxvY2soKTtcbiAgICB9IGVsc2UgaWYgKGhpZGVCdXR0b24pIHtcbiAgICAgICAgS1Iub3BlblNlbGVjdGVkUGF5bWVudE1ldGhvZCgpO1xuICAgICAgICB1bmJsb2NrKCk7XG4gICAgfSBlbHNlIGlmIChzbWFydGJ1dHRvbk1ldGhvZC5sZW5ndGggPiAwKSB7XG4gICAgICAgIEtSLm9wZW5QYXltZW50TWV0aG9kKHNtYXJ0YnV0dG9uTWV0aG9kKTtcbiAgICAgICAgdW5ibG9jaygpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGpRdWVyeSgnI3N5c3RlbXBheV9yZXN0X3Byb2Nlc3NpbmcnKS5jc3MoJ2Rpc3BsYXknLCAnYmxvY2snKTtcblxuICAgICAgICBLUi5zdWJtaXQoKTtcbiAgICB9XG5cbiAgICByZXR1cm4gZmFsc2U7XG59O1xuXG52YXIgYmxvY2sgPSBmdW5jdGlvbigpIHtcbiAgICBqUXVlcnkoJ2Zvcm0ud2MtYmxvY2stY29tcG9uZW50cy1mb3JtIHdjLWJsb2NrLWNoZWNrb3V0X19mb3JtJykuYmxvY2soKTtcbiAgICBqUXVlcnkoc3VibWl0QnV0dG9uKS5wcm9wKFwiZGlzYWJsZWRcIiwgdHJ1ZSk7XG59O1xuXG52YXIgdW5ibG9jayA9IGZ1bmN0aW9uKCkge1xuICAgIGpRdWVyeSgnZm9ybS53Yy1ibG9jay1jb21wb25lbnRzLWZvcm0gd2MtYmxvY2stY2hlY2tvdXRfX2Zvcm0nKS51bmJsb2NrKCk7XG4gICAgalF1ZXJ5KHN1Ym1pdEJ1dHRvbikucHJvcChcImRpc2FibGVkXCIsIGZhbHNlKTtcbiAgICBqUXVlcnkoJy53Yy1ibG9jay1jb21wb25lbnRzLWJ1dHRvbl9fdGV4dCcpLnRleHQoXCJcIikudGV4dCh3aW5kb3cuU1lTVEVNUEFZX0JVVFRPTl9URVhUKTtcblxuICAgIHJldHVybiBmYWxzZTtcbn07XG5cbnZhciB2YWxpZGF0ZUtSID0gZnVuY3Rpb24oS1IpIHtcbiAgICBLUi52YWxpZGF0ZUZvcm0oKS50aGVuKGZ1bmN0aW9uKHYpIHtcbiAgICAgICAgc3VibWl0Rm9ybSh2LktSKTtcbiAgICB9KS5jYXRjaChmdW5jdGlvbih2KSB7XG4gICAgICAgIC8vIERpc3BsYXkgZXJyb3IgbWVzc2FnZS5cbiAgICAgICAgdmFyIHJlc3VsdCA9IHYucmVzdWx0O1xuICAgICAgICByZXN1bHQuZG9PbkVycm9yKCk7XG4gICAgfSk7XG59O1xuXG52YXIgZmlyc3QgPSB0cnVlO1xudmFyIGluaXRGaWVsZHMgPSBmdW5jdGlvbigpIHtcbiAgICBpZiAoISBmaXJzdCkge1xuICAgICAgICBkaXNwbGF5RmllbGRzKCk7XG5cbiAgICAgICAgalF1ZXJ5KHN1Ym1pdEJ1dHRvbikub24oJ2NsaWNrJywgb25CdXR0b25DbGljayk7XG4gICAgICAgIGpRdWVyeSgnaW5wdXRbdHlwZT1yYWRpb11bbmFtZT1yYWRpby1jb250cm9sLXdjLXBheW1lbnQtbWV0aG9kLW9wdGlvbnNdJykuY2hhbmdlKGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgICAgIGlmICh0aGlzLnZhbHVlID09PSBQQVlNRU5UX01FVEhPRF9OQU1FKSB7XG4gICAgICAgICAgICAgICAgZGlzcGxheUZpZWxkcygpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBmaXJzdCA9IGZhbHNlO1xufTtcblxualF1ZXJ5KGRvY3VtZW50KS5vbigncmVhZHknLCBpbml0RmllbGRzKTtcbmpRdWVyeSh3aW5kb3cpLm9uKCdsb2FkJywgaW5pdEZpZWxkcyk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///4\n")}]);
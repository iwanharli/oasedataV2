(()=>{(function(){"use strict";$("#basic-non-sticky-notification-toggle").on("click",function(){Toastify({node:$("#basic-non-sticky-notification-content").clone().removeClass("hidden")[0],duration:3e3,newWindow:!0,close:!0,gravity:"top",position:"right",stopOnFocus:!0}).showToast()}),$("#basic-sticky-notification-toggle").on("click",function(){Toastify({node:$("#basic-non-sticky-notification-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!0,gravity:"top",position:"right",stopOnFocus:!0}).showToast()}),$("#success-notification-toggle").on("click",function(){Toastify({node:$("#success-notification-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!0,gravity:"top",position:"right",stopOnFocus:!0}).showToast()}),$("#notification-with-actions-toggle").on("click",function(){Toastify({node:$("#notification-with-actions-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!0,gravity:"top",position:"right",stopOnFocus:!0}).showToast()}),$("#notification-with-avatar-toggle").on("click",function(){let t=Toastify({node:$("#notification-with-avatar-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!1,gravity:"top",position:"right",stopOnFocus:!0}).showToast();$(t.toastElement).find('[data-dismiss="notification"]').on("click",function(){t.hideToast()})}),$("#notification-with-split-buttons-toggle").on("click",function(){let t=Toastify({node:$("#notification-with-split-buttons-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!1,gravity:"top",position:"right",stopOnFocus:!0}).showToast();$(t.toastElement).find('[data-dismiss="notification"]').on("click",function(){t.hideToast()})}),$("#notification-with-buttons-below-toggle").on("click",function(){Toastify({node:$("#notification-with-buttons-below-content").clone().removeClass("hidden")[0],duration:-1,newWindow:!0,close:!0,gravity:"top",position:"right",stopOnFocus:!0}).showToast()})})();})();

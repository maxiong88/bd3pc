/**
 * @fileOverview  短信登录
 * @author wupengtao
 */

(function ($) {
    var defaultCfg = {
      count: 60,
      countTemplate: '{count}',
      autoStart: false,
      template: '重新获取'
    };
  
    $.fn.buttonCount = function (cfg) {
      var self = this,
        count,
        cfg = $.extend(defaultCfg, cfg || {});
  
      var isEnabled = function () {
          return !self.attr("disabled");
        },
        _bindEvent = function () {
          self.bind('click', function () {
            handerClick();
          })
        },
        handerClick = function () {
          if (isEnabled()) {
            var value = self.parents("ul").find('.username').val();
            var type = self.data('type');
            if(value == ''){
                self.parents("ul").find('.username').parent().find('.err-tip').html('手机号码不能为空').show();
              return;
            }
            if (!/^1[3|4|5|6|7|8|9]\d{9}$/.test(self.parents("ul").find('.username').val())){
                self.parents("ul").find('.username').parent().find('.err-tip').html('请输入正确手机号').show();
              return;
            }

            _disable();
            _start();
            $.ajax({
              url: cfg.hook.url,
              data: {
                TPL_username: value,
                TPL_key: type
              },
              type:"get",
              dataType:'json',
              success: function (d) {
                self.parents("ul").find('.username').parent().find('.err-tip').html('')
                self.trigger("ajaxSuccess", d);
              },
              error: function (d) {
                self.trigger("ajaxError", d);
              }
            })
          }
        },
        _start = function () {
          count = cfg.count;
          self.timer && clearInterval(self.timer);
          self.timer = setInterval(clock, 1e3);
          clock();
          self.trigger("start");
  
          function clock() {
            if (!count) {
              stop();
            } else {
              self.html(cfg.countTemplate.replace(/{count}/g, count));
            }
            count--;
          }
        },
        stop = function () {
          if (self.timer) {
            clearInterval(self.timer);
            delete self.timer;
            self.html(cfg.template);
            _enable();
            self.trigger("stop");
          }
        },
        _disable = function () {
          if (isEnabled()) {
            self.attr('disabled', 'disabled');
            self.trigger("disable");
          }
        }  ,
  
        _enable = function () {
          if (!isEnabled()) {
            self.removeAttr('disabled');
            $(self).trigger("enable");
          }
        };
  
      self.init = function () {
        _bindEvent();
        if (cfg.autoStart) {
          handerClick();
        }
      };
      self.stop = stop;
      self.start = handerClick;
  
      self.init();
  
      return self;
    };
  
  })(jQuery);
  
  
  $(function() {
    var btnCount = $('.getCheckcode').buttonCount({
      count: '60',
      countTemplate: '在 {count} 秒后重发',
      template: '重新获取',
      autoStart: false,
      hook: {
        url: './sendMsg.do'
      }
    }).bind('ajaxSuccess', function(e, data) {
      if (!data.success) {
        weui.alert(data.message);
        if (data.needCheck) {
          btnCount.stop();
        }
      }
    });
  });
# GitHub520

> 本项目参考   [`521xueweihan/GitHub520`](https://github.com/521xueweihan/GitHub520 ) 完成了一个PHP版本

## 使用方法

### 复制下面的内容

```text
{content}
```

上面内容会自动定时更新，保证最新有效。数据更新时间：{update_time}

### 修改 hosts 文件

hosts 文件在每个系统的位置不一，详情如下：

- Windows 系统：`C:\Windows\System32\drivers\etc\hosts`
- Linux 系统：`/etc/hosts`
- Mac（苹果电脑）系统：`/etc/hosts`
- Android（安卓）系统：`/system/etc/hosts`
- iPhone（iOS）系统：`/etc/hosts`

修改方法，把第一步的内容复制到文本末尾：

- Windows 使用记事本。
- Linux、Mac 使用 Root 权限：`sudo vi /etc/hosts`。
- iPhone、iPad 须越狱、Android 必须要 root。

### 激活生效

大部分情况下是直接生效，如未生效可尝试下面的办法，刷新 DNS：

- Windows：在 CMD 窗口输入：`ipconfig /flushdns`
- Linux 命令：`sudo nscd restart`，如报错则须安装：`sudo apt install nscd` 或 `sudo /etc/init.d/nscd restart`
- Mac 命令：`sudo killall -HUP mDNSResponder`

**Tips**： 上述方法无效可以尝试重启机器。
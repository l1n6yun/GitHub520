# GitHub520

> 本项目参考   [`521xueweihan/GitHub520`](https://github.com/521xueweihan/GitHub520 ) 完成了一个PHP版本

## 使用方法

### 复制下面的内容

```text
# GitHub520 Host Start

                         alive.github.com
                         live.github.com
                         github.githubassets.com
                         central.github.com
                         desktop.githubusercontent.com
                         assets-cdn.github.com
                         camo.githubusercontent.com
                         github.map.fastly.net
                         github.global.ssl.fastly.net
                         gist.github.com
                         github.io
                         github.com
                         github.blog
                         api.github.com
                         raw.githubusercontent.com
                         user-images.githubusercontent.com
                         favicons.githubusercontent.com
                         avatars5.githubusercontent.com
                         avatars4.githubusercontent.com
                         avatars3.githubusercontent.com
                         avatars2.githubusercontent.com
                         avatars1.githubusercontent.com
                         avatars0.githubusercontent.com
                         avatars.githubusercontent.com
                         codeload.github.com
                         github-cloud.s3.amazonaws.com
                         github-com.s3.amazonaws.com
                         github-production-release-asset-2e65be.s3.amazonaws.com
                         github-production-user-asset-6210df.s3.amazonaws.com
                         github-production-repository-file-5c1aeb.s3.amazonaws.com
                         githubstatus.com
                         github.community
                         github.dev
                         collector.github.com
                         pipelines.actions.githubusercontent.com
                         media.githubusercontent.com
                         cloud.githubusercontent.com
                         objects.githubusercontent.com
                         raw.github.com

# Update time: 2023-08-01T20:15:47+08:00
# Update url: https://raw.githubusercontent.com/l1n6yun/GitHub520/master/hosts
# Star me: https://github.com/l1n6yun/GitHub520
# GitHub520 Host End

```

上面内容会自动定时更新，保证最新有效。数据更新时间：2023-08-01T20:15:47+08:00

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
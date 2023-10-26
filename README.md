# GitHub520

> 本项目参考   [`521xueweihan/GitHub520`](https://github.com/521xueweihan/GitHub520 ) 完成了一个PHP版本

## 使用方法

### 复制下面的内容

```text
# GitHub520 Host Start

       140.82.113.26     alive.github.com
       140.82.114.25     live.github.com
     185.199.108.154     github.githubassets.com
       140.82.114.22     central.github.com
     185.199.108.133     desktop.githubusercontent.com
     185.199.108.153     assets-cdn.github.com
     185.199.108.133     camo.githubusercontent.com
     185.199.108.133     github.map.fastly.net
       151.101.1.194     github.global.ssl.fastly.net
        140.82.112.3     gist.github.com
     185.199.108.153     github.io
        140.82.114.4     github.com
          192.0.66.2     github.blog
        140.82.112.6     api.github.com
     185.199.108.133     raw.githubusercontent.com
     185.199.108.133     user-images.githubusercontent.com
     185.199.108.133     favicons.githubusercontent.com
     185.199.108.133     avatars5.githubusercontent.com
     185.199.108.133     avatars4.githubusercontent.com
     185.199.108.133     avatars3.githubusercontent.com
     185.199.108.133     avatars2.githubusercontent.com
     185.199.108.133     avatars1.githubusercontent.com
     185.199.108.133     avatars0.githubusercontent.com
     185.199.108.133     avatars.githubusercontent.com
       140.82.113.10     codeload.github.com
           3.5.9.210     github-cloud.s3.amazonaws.com
          3.5.16.103     github-com.s3.amazonaws.com
          3.5.27.139     github-production-release-asset-2e65be.s3.amazonaws.com
          3.5.17.171     github-production-user-asset-6210df.s3.amazonaws.com
           3.5.9.216     github-production-repository-file-5c1aeb.s3.amazonaws.com
     185.199.108.153     githubstatus.com
       140.82.114.17     github.community
       52.224.38.193     github.dev
       140.82.112.21     collector.github.com
        13.107.42.16     pipelines.actions.githubusercontent.com
     185.199.108.133     media.githubusercontent.com
     185.199.108.133     cloud.githubusercontent.com
     185.199.108.133     objects.githubusercontent.com
     185.199.108.133     raw.github.com

# Update time: 2023-10-27T05:07:41+08:00
# Update url: https://raw.githubusercontent.com/l1n6yun/GitHub520/master/hosts
# Star me: https://github.com/l1n6yun/GitHub520
# GitHub520 Host End

```

上面内容会自动定时更新，保证最新有效。数据更新时间：2023-10-27T05:07:41+08:00

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
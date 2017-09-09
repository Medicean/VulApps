#!/bin/bash

COLOR_RED='\033[1;31m'
COLOR_GREY='\033[38m'
COLOR_BLUE='\033[1;34m'
COLOR_CYAN='\033[36m'
COLOR_LINK='\033[0;32;4m'
COLOR_BLACK='\033[0m'
COLOR_GREEN='\033[32m'
COLOR_WHITE='\033[37m'
COLOR_PURPLE='\033[35m'
COLOR_YELLOW='\033[33m'


echo -e "
${COLOR_GREEN}
__     __     _    _
\ \   / /   _| |  / \   _ __  _ __  ___
 \ \ / / | | | | / _ \ | '_ \| '_ \/ __|
  \ V /| |_| | |/ ___ \| |_) | |_) \__ \\
   \_/  \__,_|_/_/   \_\ .__/| .__/|___/
                       |_|   |_|

${COLOR_BLUE}使用说明${COLOR_BLACK}
${COLOR_GREEN}=======${COLOR_BLACK}

${COLOR_BLACK}VulApps 旨在快速搭建各种漏洞环境与安全工具环境，启动无需其它步骤，即开即用。 

GitHub 地址:    ${COLOR_LINK}https://github.com/Medicean/VulApps${COLOR_BLACK}
DockerHub 地址: ${COLOR_LINK}https://hub.docker.com/r/medicean/vulapps/${COLOR_BLACK}

${COLOR_RED}特别提示：当前镜像无任何漏洞环境，仅为说明如何使用 VulApps。如果喜欢 VulApps,别忘记点个 Star 哟~${COLOR_BLACK}

当你看到本页面时，我想你已经安装好 Docker 了。
在使用 VulApps 之前，我强烈建议你先花 20 分钟学习 Docker 的基础知识。

${COLOR_BLUE}快速入门${COLOR_BLACK}
${COLOR_GREEN}=======${COLOR_BLACK}

以搭建「Struts2 S2-037 漏洞环境」为例，让你快速了解如何使用 VulApps 中的镜像。

${COLOR_GREEN}1.${COLOR_BLACK} 首先前往 S2-037 目录，查看使用说明

 地址：${COLOR_LINK}https://github.com/Medicean/VulApps/tree/master/s/struts2/s2-037${COLOR_BLACK}

 在使用说明页中有具体获取、启动 S2-037 环境的方法

${COLOR_GREEN}2.${COLOR_BLACK} 在命令行执行下面这条命令，获取 S2-037 环境（可跳过）

 ${COLOR_PURPLE}$ docker pull medicean/vulapps:s_struts2_s2-037${COLOR_BLACK}

${COLOR_GREEN}3.${COLOR_BLACK} 在命令行执行下面这条命令，启动 S2-037 环境

 ${COLOR_PURPLE}$ docker run -d -p 8080:8080 medicean/vulapps:s_struts2_s2-037${COLOR_BLACK}

 特别说明：

  1) -p 8080:8080 前面的 8080 代表物理机的端口，可随意指定。
  2) 如果本地没有 s_struts2_s2-037 这个镜像，会自动从 DockerHub 拉取并启动

${COLOR_GREEN}4.${COLOR_BLACK} 打开浏览器，根据第3步的启动参数 访问 http://你物理机 IP 地址:端口号/ 就可以看到了

${COLOR_CYAN}惊不惊喜？意不意外？一切就是如此简单 :)${COLOR_BLACK}

${COLOR_BLUE}Q & A${COLOR_BLACK}
${COLOR_GREEN}=======${COLOR_BLACK}

 ${COLOR_CYAN}Q:${COLOR_BLACK} 如何进入容器执行本地命令？
 ${COLOR_GREEN}A:${COLOR_BLACK} 具体查看: ${COLOR_LINK}https://github.com/Medicean/VulApps/issues/9${COLOR_BLACK}

 ${COLOR_CYAN}Q:${COLOR_BLACK} 自己使用 Dockerfile Build 失败如何解决？
 ${COLOR_GREEN}A:${COLOR_BLACK} 有些环境使用的 apt、yum 源在未来版本号已经更新，找不到这个软件包了。建议不要自行 Build,直接拉取已经 Build 好的。

 ${COLOR_CYAN}Q:${COLOR_BLACK} 有没有好用的图形界面工具？
 ${COLOR_GREEN}A:${COLOR_BLACK} 推荐使用 Docker 官方的 Kitematic 工具

 ${COLOR_CYAN}Q:${COLOR_BLACK} 怎么才能看到已经有哪些环境了？
 ${COLOR_GREEN}A:${COLOR_BLACK} 前往 Wiki 页（${COLOR_LINK}https://github.com/Medicean/VulApps/wiki${COLOR_BLACK}）查看所有环境的 Tag

 ${COLOR_CYAN}Q:${COLOR_BLACK} 怎么第一时间知道该项目更新的环境？
 ${COLOR_GREEN}A:${COLOR_BLACK} GitHub 项目页「右上角」有个 Watch，小手不要犹豫，快快动起来

 ${COLOR_CYAN}Q:${COLOR_BLACK} 我能将 VulApps 的环境封装进我的商业产品当中吗？
 ${COLOR_GREEN}A:${COLOR_BLACK} 可以的。VulApps 使用的开源协议是 GPL 3.0, 商业化请遵循 GPL 3.0 的协议

 ${COLOR_CYAN}Q:${COLOR_BLACK} 我还有其它问题怎么办？
 ${COLOR_GREEN}A:${COLOR_BLACK} 前往 issue 页(${COLOR_LINK}https://github.com/Medicean/VulApps/issues${COLOR_BLACK})，搜索已有问题或者提问

${COLOR_BLUE}如何贡献${COLOR_BLACK}
${COLOR_GREEN}=======${COLOR_BLACK}

很多公司都在做类似的事情，真正开放的并没有几个。我希望的是大家来共同维护着一个开源的靶场。
在你从本项目中获取某个有用的环境时，相对的，我希望你能向 VulApps 贡献一个环境。

VulApps 接受何种形式的贡献

    * 新增环境及完善资料
        * Dockerfile
        * 漏洞详细说明
        * 漏洞 poc
        * 漏洞 exp
    * 原有环境 Bug 修复

具体请参考： ${COLOR_LINK}https://github.com/Medicean/VulApps/blob/master/.github/CONTRIBUTING.md${COLOR_BLACK}

${COLOR_BLUE}致谢列表${COLOR_BLACK}
${COLOR_GREEN}=======${COLOR_BLACK}

感谢对 VulApps 做出过贡献的所有小伙伴们。

${COLOR_LINK}https://github.com/Medicean/VulApps/blob/master/THANKS.md${COLOR_BLACK}


                                                            Medicean 2017.09.09"|more -l

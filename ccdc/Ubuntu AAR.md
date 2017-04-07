### Ubuntu 14.04 (Kernel 3.19) Mail/SSH Server AAR

### Issues with the Server
- There were a large number of user accounts with default passwords and authorized SSH keys on the server.
- There was a vulnerability present in my kernel that allowed users with no privileges associated with their account to gain root access.
- It was frustrating attempting to configure mail clients on our laptops.
- There were likely a large number of vulnerabilities associated with Dovecot and Postfix that I did not know about. At one point during the competition SSH traffic was blocked from the server, and the Red Team still managed to get shell access. This was likely from an undiscovered vulnerability in the mail applications.

### What happened to the Server
- The Red Team exploited a number of user accounts that I overlooked and gained root access through a well-known exploit.
- After gaining access to the server, the Red Team deleted /bin, /etc, and /var, effectively rendering the server useless. This required contacting the CIO and requesting a server scrub.
- After restoring the server the Red Team was back in almost immediately using the same exploit.
- Dovecot and Postfix must have been exploited to gain shell access.

### What should have happened
- CVE's should have been researched for Ubuntu 14.04.
- Kernel vulnerabilities should have been IMMEDIATELY patched.
- Unattended upgrades should have been configured to automatically install security upgrades on the server.
- All non-employee user accounts should have been locked after initial hardening.

### Mitigating Factors
- Snapshots were made after restoring the server to default, which was used to reduce the downtime that resulted from Red Team actions.
- A copy of the mail server was created using ESXi that ran the SSH service. Traffic was redirected from the mail server to the new SSH server using iptables rules (this involved turning on ipv4 forwarding and setting up an iptables MASQUERADE rule). This ensured that the Red Team could not compromise the mail server using SSH, and it acted as a pseudo-honeypot.
- Fail2Ban was set up and used to create a jail for SSH. Attempting to bruteforce the server using SSH was met with a permanent iptables ban. This caught a few people trying to SSH in with deleted user accounts.
- UFW was used to disallow traffic except on specific ports that were gathered using the netstat -tulpn command.
- The kernel vulnerability that allowed privilege escalation was fixed by disabling the kernel module overlayfs. This was accomplished using modprobe -r, and also by then blacklisting overlayfs in /etc/modprobe.d/csban-overlayfs.conf. (More information here: http://blog.emilburzo.com/2015/06/quick-work-around-for-cve-2015-1328.html).
- User accounts that were previously used to break into the server were deleted using the userdel command.
- Unattended upgrades were installed the second day of the competition.
- It should be noted that after segmenting traffic and disabling overlayfs the Red Team did not get into the mail server. They may not have had time to find another exploit, as this did occur on the second day of the competition. The Red Team could also have simply ignored the server after the hardening and gone after easier targets on our network.
- Several authorized_key files were discovered on multiple servers (including the mail/SSH server).

### Preparing for next year
- Create an ESXi server with a duplicate of the regional topology.
- Research CVE's for your assigned operating system throughout the year. Look into possible fixes.
- Remember to check your server for authorized_key files. An easy way to do this is to run the command <code>find / | grep "authorized_keys"</code>. If none of the keys are necessary for continued server operation, delete the keys quickly with the command <code>find / | grep "authorized_keys" | xargs rm</code>.
- Configure a mail client on a laptop. While our email technically worked, we were never able to properly configure Thunderbird to properly send and receive email. I expected Roundcube to be used for sending and receiving emails, as this was used in the preliminary competition. In hindsight, my server would likely have been compromised much quicker if it was also handling a web server.

#!/bin/bash
$(ps aux | grep airodump | awk '{print $2}'| xargs kill -9)

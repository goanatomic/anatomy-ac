#!/bin/bash

# - - - Make new view
if [ $1 = 'view' ]; then
	# check that 3 arguments are passed
	if [ $# = 3 ]; then
		# check that model exists
		if [ -d embed/templates/$3 ]; then
			touch embed/templates/$3/views/$2.html
			echo "<cms:extends 'anatomy/root.html' />" >> embed/templates/$3/views/$2.html
			echo "" >> embed/templates/$3/routes.html
			echo "<cms:route name = '$2' path = '$2' />" >> embed/templates/$3/routes.html
			if sublime &> /dev/null; then
				sublime embed/templates/$3/views/$2.html
			fi
			echo "View created: '$3' => '$2'"
		else
			echo "Model '$3' does not exist . . ."
		fi
	else
		echo "View expects two arguments => {view name} {model name}"
	fi
fi